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

class CreateMapFileCommand extends Command{

	/** @var \Nette\Application\Application @inject */
	public $app;

	/** @var \App\Model\Options @inject*/
	public $options;

	protected function configure(){
        $this->setName('map:createFile')
	        ->setDescription('Create html of map from .tmx file')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Names of maps to render (separate multiple names with a space)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
	    Debugger::enable(Debugger::DEVELOPMENT);

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

		    $presenter = $this->app->presenterFactory->createPresenter($this->options->getVersionName($version));
		    $presenter->autoCanonicalize = FALSE;
		    $request = new \Nette\Application\Request($this->options->getVersionName($version), 'GET', array('action' => 'map','map' => $file->getBasename('.tmx')));
		    $response = $presenter->run($request);
		    $response->getSource()->basePath = NULL;
		    $html = (string) $response->getSource();
		    file_put_contents($outDir.$file->getBasename('.tmx').'.html',$html);
        }

	    $bar->finish();

	    $output->writeln('');
	    $output->writeln('<info>Finished generating '.$count.' map html files</info>');

        return 0; // zero return code means everything is ok
    }
}
