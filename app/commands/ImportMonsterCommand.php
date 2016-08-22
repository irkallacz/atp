<?php
namespace App\Console;

use Nette\Utils\Arrays;
use Nette\Utils\Finder;
use Nette\Utils\Image;
use Nette\Utils\Json;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tracy\Debugger;

class ImportMonsterCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	public $model;

	protected function configure(){
        $this->setName('database:importMonster')
	        ->setDescription('Load monsters form .json files to database')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Name of file to load (separate multiple names with a space)');
    }

	protected function execute(InputInterface $input, OutputInterface $output){
		Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();
		$this->model = $this->getHelper('container')->getByType('App\Model\\'.$this->options->getVersionName($version));

	    $files = $input->getArgument('files');
	    if (!$files) $files = 'monsterlist*.json';

	    $inDir = $this->options->resDir.'/'.$version.'/raw/';

	    $finder = Finder::findFiles($files)->in($inDir);

	    $fileCount = iterator_count($finder->getIterator());

	    $this->model->getDatabase()->beginTransaction();
	    $this->model->deleteTable($this->model->getCharacters()->getName());
		$this->model->deleteTable($this->model->getCharacterConditions()->getName());

		$itemCount = 0;
	    foreach($finder as $file){
		    $json = file_get_contents($inDir.$file->getFilename());
		    $items = Json::decode($json,Json::FORCE_ARRAY);
			$count = count($items);

		    $bar = new ProgressBar($output, $count);
		    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
		    $bar->setMessage($file->getFilename());
		    $bar->start();

		    foreach ($items as $item) {
			    $bar->advance();
			    $item['spawnGroup'] = Arrays::get($item,'spawnGroup',$item['id']);

			    if (!$this->model->getSpawns()->get($item['spawnGroup'])) $this->model->getSpawns()->insert($item['spawnGroup']);

			    ParseUtils::expandArrayKey($item,'attackDamage');

			    if ((isset($item['hitEffect']))and(isset($item['hitEffect']['conditionsTarget']))){
				    $conditions = $item['hitEffect']['conditionsTarget'];
				    //unset($item['hitEffect']['conditionsTarget']);
				    //if (empty($item['hitEffect'])) unset($item['hitEffect']);
			    }else
				    $conditions = [];

			    $item = ParseUtils::JsonArray($item);
			    $item['filename'] = $file->getFilename();

			    $this->model->getCharacters()->insert($item);

		        foreach($conditions as $condition){
				    $condition['monster'] = $item['id'];
				    $this->model->getCharacterConditions()->insert($condition);
			    }
			}

		    $bar->finish();
	        $output->writeln('');
		    $itemCount += $count;
		}

	    $this->model->getDatabase()->commit();

	    $output->writeln('');
	    $output->writeln('<info>Finished importing '.$itemCount.' monsters in '.$fileCount.' json files</info>');

        return 0; // zero return code means everything is ok
    }
}
