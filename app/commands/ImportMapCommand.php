<?php
namespace App\Console;

use Nette\Utils\Finder;
use Nette\Utils\Image;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tracy\Debugger;

class ImportMapCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	public $model;

	protected function configure(){
        $this->setName('database:importMap')
	        ->setDescription('Load map and spawn area from .tmx files to database')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Names of maps to import (separate multiple names with a space)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
	    Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();
	    $this->model = $this->getHelper('container')->getByType('App\Model\\'.$this->options->getVersionName($version));

	    $files = $input->getArgument('files');
	    if (!$files) $files = '*.tmx';

	    $inDir = $this->options->resDir.'/'.$version.'/xml/';

	    $finder = Finder::findFiles($files)->in($inDir);
	    $fileCount = iterator_count($finder->getIterator());

	    $this->model->getDatabase()->beginTransaction();
	    $this->model->deleteTable($this->model->getMaps()->getName());
	    $this->model->deleteTable($this->model->getMapSpawns()->getName());

	    $worldMapFile = $this->options->resDir.'/'.$version.'/xml/worldmap.xml';
	    $worldMap = simplexml_load_file($worldMapFile);
	    $segments = $worldMap->xpath("/worldmap/segment");

	    $itemCount = count($segments);

	    $output->writeln('Importing maps form worldmap.xml file');

	    $bar = new ProgressBar($output, $itemCount);
	    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
	    $bar->start();

	    foreach($segments as $segment){
		    $id = (string) $segment['id'];
		    $bar->setMessage($id);
		    $bar->advance();

		    $map = [
		        'id' => $id,
			    'area' => 1
		    ];

		    $this->model->getMaps()->insert($map);
	    }

	    $bar->finish();

	    $output->writeln('');
	    $output->writeln('<info>Finished importing '.$itemCount.' maps form worldmap.xml file</info>');
	    $output->writeln('');

	    $output->writeln('Importing map and spawn areas form map .tmx files');

	    $bar = new ProgressBar($output, $fileCount);
	    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
	    $bar->start();

	    $itemCount = 0;

	    foreach($finder as $file){
		    $bar->setMessage($file->getFilename());
		    $bar->advance();

		    $xmlFile = $this->options->resDir.'/'.$version.'/xml/'.$file->getFilename();
		    $xml = simplexml_load_file($xmlFile);
			$mapName = $file->getBasename('.tmx');

		    $outside = $xml->xpath("/map/properties/property[@name='outside']");
		    $outside = empty($outside) ? 0 : intval($outside[0]['value']);

		    $segment = $worldMap->xpath("/worldmap/segment/map[@id='$mapName']/parent::segment");
		    if ($segment) $areamap = (string) $segment[0]->attributes()['id']; else $areamap = null;

		    $map = [
				'id' => $mapName,
			    'outside' => $outside,
			    'parent' => $areamap
		    ];

		    $this->model->getMaps()->insert($map);

		    foreach ($xml->xpath("/map/objectgroup/object[@type='spawn']") as $spawn){
			    $count = $spawn->xpath("properties/property[@name='quantity']");
			    $count = empty($count) ? 1 : intval($count[0]['value']);

			    $map = [
				    'map' => $mapName,
				    'spawnGroup' => strtolower(strval($spawn['name'])),
			        'quantity' => $count
			    ];

			    $this->model->getMapSpawns()->insert($map);
			    $itemCount++;
		    }

		}
	    $bar->finish();
	    $output->writeln('');
	    $output->writeln('<info>Finished map and '.$itemCount.' spawn areas importing form '.$fileCount.' map .tmx files</info>');

	    $nameFile = $this->options->resDir.'/'.$version.'/map.csv';
	    $file = file($nameFile);

	    $itemCount = count($file);

	    $output->writeln('');
	    $output->writeln('Importing map names from map.csv file');

	    $bar = new ProgressBar($output, $itemCount);
	    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
	    $bar->start();

	    foreach($file as $line){
		    $line = explode(',',$line);
		    $bar->setMessage($line[0]);
		    $bar->advance();

		    $map = $this->model->getMaps()->get($line[0]);
		    if ($map) $map->update(['name' => $line[1]]);
	    }

	    $bar->finish();

	    $output->writeln('');
	    $output->writeln('<info>Finished importing '.$itemCount.' map names form map.csv file</info>');

	    $this->model->getDatabase()->commit();

	    return 0; // zero return code means everything is ok
    }
}
