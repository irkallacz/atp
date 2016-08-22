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

class CreateMapAreaFileCommand extends Command{

	/** @var \Nette\Application\Application @inject */
	public $app;

	/** @var \Nette\Http\Session @inject */
	//public $session;

	/** @var \App\Model\Options @inject*/
	public $options;

	protected function configure(){
        $this->setName('map:createAreaFile')
	        ->setDescription('Create html page from one or more areamaps in worldmap.xml')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Names of maps to render (separate multiple names with a space)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
	    Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();

	    $files = $input->getArgument('files');
		if (!$files) {
			$worldMapFile = $this->options->resDir.'/'.$version.'/xml/worldmap.xml';
			$worldMap = simplexml_load_file($worldMapFile);
			foreach($worldMap->xpath('/worldmap/segment') as $segment) $files[] = (string) $segment->attributes()['id'];
		}

	    $outDir = $this->options->renderDir.'/'.$version.'/map/';

	    $count = count($files);

	    $bar = new ProgressBar($output, $count);
	    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
	    $bar->start();
		//$this->session->getSection('render')->areaMapImages =
	    foreach($files as $file){
		    $bar->setMessage($file);
		    $bar->advance();

		    $presenter = $this->app->presenterFactory->createPresenter($this->options->getVersionName($version));
		    $presenter->autoCanonicalize = FALSE;
		    $request = new \Nette\Application\Request($this->options->getVersionName($version), 'GET', array('action' => 'areamap','map' => $file));
		    $response = $presenter->run($request);
		    $response->getSource()->basePath = NULL;
		    $html = (string) $response->getSource();
		    file_put_contents($outDir.$file.'.html',$html);
        }

	    $bar->finish();

	    $output->writeln('');
	    $output->writeln('<info>Finished generating '.$count.' areamap html files</info>');

        return 0; // zero return code means everything is ok
    }
}
