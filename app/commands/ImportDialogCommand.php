<?php
namespace App\Console;

use Nette\Utils\Arrays;
use Nette\Utils\Finder;
use Nette\Utils\Json;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tracy\Debugger;

class ImportDialogCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	public $model;

	protected function configure(){
        $this->setName('database:importDialog')
	        ->setDescription('Load dialog form .json files to database')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Name of file to load (separate multiple names with a space)');
    }

	protected function execute(InputInterface $input, OutputInterface $output){
		//$this->model = $this->getHelper('container')->getByType('App\Model\ZeroSevenTwoModel');

		Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();
		$this->model = $this->getHelper('container')->getByType('App\Model\\'.$this->options->getVersionName($version));

	    $files = $input->getArgument('files');
	    if (!$files) $files = 'conversationlist*.json';

	    $inDir = $this->options->resDir.'/'.$version.'/raw/';

	    $finder = Finder::findFiles($files)->in($inDir);

	    $fileCount = iterator_count($finder->getIterator());

	    $this->model->getDatabase()->beginTransaction();
		$this->model->deleteTable($this->model->getDialogRepliesRequires()->getName());
		$this->model->deleteTable($this->model->getDialogRewards()->getName());
		$this->model->deleteTable($this->model->getDialogReplies()->getName());
		$this->model->deleteTable($this->model->getDialog()->getName());

		$this->model->setDefaultDialog();

	    $itemCount = 0;

	    foreach($finder as $file){
		    $json = file_get_contents($inDir.$file->getFilename());
		    $dialogs = Json::decode($json,Json::FORCE_ARRAY);
			$count = count($dialogs);

		    $bar = new ProgressBar($output, $count);
		    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
		    $bar->setMessage($file->getFilename());
		    $bar->start();

		    foreach ($dialogs as $dialog) {
			    $bar->advance();

			    $replies = ParseUtils::getKeyUnset($dialog,'replies',[]);
			    $rewards = ParseUtils::getKeyUnset($dialog,'rewards',[]);

			    $dialog = ParseUtils::JsonArray($dialog);
			    $dialog['filename'] = $file->getFilename();

			    $this->model->getDialog()->insert($dialog);

			    foreach($rewards as $reward) {
				    $reward['dialog'] = $dialog['id'];
				    $this->model->getDialogRewards()->insert($reward);
			    }

		        foreach($replies as $reply) {
				    $reply['dialog'] = $dialog['id'];
				    $requires = ParseUtils::getKeyUnset($reply,'requires',[]);

				    $this->model->getDialogReplies()->insert($reply);

			        foreach ($requires as $require){
				        $require['dialog'] = $reply['dialog'];
				        $require['nextPhraseID'] = $reply['nextPhraseID'];
				        $this->model->getDialogRepliesRequires()->insert($require);
			        }
				}
		    }

		    $bar->finish();
	        $output->writeln('');
		    $itemCount += $count;
		}

	    $this->model->getDatabase()->commit();

	    $output->writeln('');
	    $output->writeln('<info>Finished importing '.$itemCount.' dialogs in '.$fileCount.' json files</info>');

        return 0; // zero return code means everything is ok
    }
}
