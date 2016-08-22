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

class ImportDroplistCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	public $model;

	protected function configure(){
        $this->setName('database:importDroplist')
	        ->setDescription('Load droplist form .json files to database')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Name of file to load (separate multiple names with a space)');
    }

	protected function execute(InputInterface $input, OutputInterface $output){
		Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();
		$this->model = $this->getHelper('container')->getByType('App\Model\\'.$this->options->getVersionName($version));

	    $files = $input->getArgument('files');
	    if (!$files) $files = 'droplist*.json';

	    $inDir = $this->options->resDir.'/'.$version.'/raw/';

	    $finder = Finder::findFiles($files)->in($inDir);

	    $fileCount = iterator_count($finder->getIterator());

	    $this->model->getDatabase()->beginTransaction();
		$this->model->deleteTable($this->model->getDroplists()->getName());
		$this->model->deleteTable($this->model->getDroplistItems()->getName());

	    $itemCount = 0;

	    foreach($finder as $file){
		    $json = file_get_contents($inDir.$file->getFilename());
		    $droplists = Json::decode($json,Json::FORCE_ARRAY);
			$count = count($droplists);

		    $bar = new ProgressBar($output, $count);
		    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
		    $bar->setMessage($file->getFilename());
		    $bar->start();

		    foreach ($droplists as $droplist) {
			    $bar->advance();
			    $items = Arrays::get($droplist,'items',FALSE);
				unset($droplist['items']);

			    $droplist = ParseUtils::JsonArray($droplist);
			    $droplist['filename'] = $file->getFilename();

			    $this->model->getDroplist()->insert($droplist);

			    if ($items) {
			    	foreach($items as $item) {
						if (strpos($item['chance'],'/')!==FALSE){
							$chance = explode('/',$item['chance']);
							$item['chance'] = (intval($chance[0]) / intval($chance[1]))*100;
						}

					    ParseUtils::expandArrayKey($item,'quantity');
					    $item['droplistID'] = $droplist['id'];
						$this->model->getDroplistItems()->insert($item);
					}
			    }
		    }
		    $bar->finish();
	        $output->writeln('');
		    $itemCount += $count;
		}

	    $this->model->getDatabase()->commit();

	    $output->writeln('');
	    $output->writeln('<info>Finished importing '.$itemCount.' droplists in '.$fileCount.' json files</info>');

        return 0; // zero return code means everything is ok
    }
}
