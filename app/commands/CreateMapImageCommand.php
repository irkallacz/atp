<?php
namespace App\Console;

use Nette\Utils\Finder;
use Nette\Utils\Image;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tiled\Map\Map;
use Tiled\Map\Viewer;
use Tracy\Debugger;

class CreateMapImageCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	protected function configure(){
        $this->setName('map:createImage')
	        ->setDescription('Create image of map from .tmx file')
	        ->addArgument('version',InputArgument::REQUIRED, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Names of maps to render (separate multiple names with a space)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();

	    $files = $input->getArgument('files');
	    if (!$files) $files = '*.tmx';

	    $outDir = $this->options->renderDir.'/'.$version.'/map/';
	    $inDir = $this->options->resDir.'/'.$version.'/xml/';

	    $finder = Finder::findFiles($files)->in($inDir);
	    $count = iterator_count($finder->getIterator());

	    $bar = new ProgressBar($output, $count);
	    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
	    $bar->start();

	    foreach($finder as $file){
		    $bar->setMessage($file->getFilename());
		    $bar->advance();

		    $map = new Map();
		    $xml = $map->load($file->getRealPath());

		    $viewer = new Viewer();
		    $viewer->setMap($map);

		    $viewer->layers_nodraw = ['Walkable'];

		    $viewer->load_ts();
		    $viewer->init_draw();
		    $viewer->draw();
		    $resource = $viewer->render($outDir.$file->getBasename('.tmx').'.png');

		    $image = new Image($resource);
		    $image->save($outDir.$file->getBasename('.tmx').'.jpg', 80, Image::JPEG);

		    $viewer->layers_nodraw = ['Walkable','Ground','Objects'];

		    $viewer->init_draw();
		    $viewer->draw();

		    $viewer->render($outDir.$file->getBasename('.tmx').'_above.png');
        }

	    $bar->finish();

	    $output->writeln('');
	    $output->writeln('<info>Finished generating '.$count.' map image files</info>');

        return 0; // zero return code means everything is ok
    }
}
