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

class AssignNpcQuestCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	public $model;

	protected function configure(){
        $this->setName('database:assignNpcQuest')
	        ->setDescription('Assign NPC to quests')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game');
	}

	protected function execute(InputInterface $input, OutputInterface $output){
		Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();
		$this->model = $this->getHelper('container')->getByType('App\Model\\'.$this->options->getVersionName($version));

		$this->model->deleteTable($this->model->getQuestsCharacters()->getName());

		$itemCount = 0;

		function find_children_db($name,&$model,&$tree = []){
			$dialogs = $model->getDialogReplies()->where('dialog',$name)->where('NOT nextPhraseID',['F','R','S','X']);
			if (count($dialogs)){
				foreach($dialogs as $dialog){
					if (!array_key_exists($dialog['nextPhraseID'],$tree)) {
						$tree[$dialog['nextPhraseID']] = 1;
						find_children_db($dialog['nextPhraseID'],$model,$tree);
					}
				}
			}
			return $tree;
		}

		foreach ($this->model->getCharacters()->where('NOT phraseID',null) as $npc){
			$dialogs = find_children_db($npc['phraseID'],$this->model);
			$dialogs[$npc['phraseID']] = 1;
			foreach ($this->model->getDialogRewards()->select('DISTINCT rewardID, dialog')->where('rewardType','questProgress')->where('dialog',array_keys($dialogs)) as $reward){
				$insert = ['quest' => $reward->rewardID,'monster' => $npc->id];
				if (!$this->model->getQuestsCharacters()->where($insert)->fetch()){
					$insert['dialog'] = $reward->dialog;
					$this->model->getQuestsCharacters()->insert($insert);
					$output->writeln(join(' ',$insert));
					$itemCount++;
				}
			}
		}

		$output->writeln('');
		$output->writeln('<info>Finished assigning '.$itemCount.' NPC to quest</info>');

		return 0; // zero return code means everything is ok
    }
}
