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

class AssignItemQuestCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	public $model;

	protected function configure(){
        $this->setName('database:assignItemQuest')
	        ->setDescription('Assign items to quests')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game');
	}

	protected function execute(InputInterface $input, OutputInterface $output){
		Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();
		$this->model = $this->getHelper('container')->getByType('App\Model\\'.$this->options->getVersionName($version));

		$this->model->deleteTable($this->model->getQuestsItems()->getName());

		$itemCount = 0;

		$output->writeln('<comment>Importing items from replies requirements</comment>');

		foreach ($this->model->getDialogRepliesRequires()->where('NOT requireType','questProgress') as $dialog){
			foreach ($this->model->getDialogRewards()->where('dialog',$dialog->nextPhraseID)->where('rewardType','questProgress') as $reward){
				$item = ['quest' => $reward->rewardID, 'item' => $dialog->requireID, 'quantity' => $dialog->value];
				if (!$this->model->getQuestsItems()->where($item)->fetch()){
					$item['dialog'] = $dialog->dialog;

					$output->writeln(join(' ',$item));
					$this->model->getQuestsItems()->insert($item);
					$itemCount++;
				}
			}

			foreach ($this->model->getDialogRewards()->where('dialog',$dialog->dialog)->where('rewardType','questProgress') as $reward){
				$item = ['quest' => $reward->rewardID, 'item' => $dialog->requireID, 'quantity' => $dialog->value];
				if (!$this->model->getQuestsItems()->where($item)->fetch()){
					$item['dialog'] = $dialog->dialog;

					$output->writeln(join(' ',$item));
					$this->model->getQuestsItems()->insert($item);
					$itemCount++;
				}
			}

		}

		$output->writeln('<comment>Importing items from reward droplist</comment>');

		foreach ($this->model->getDialogRewards()->where('rewardType','dropList') as $droplist){
			foreach($this->model->getDialogRewards()->where('rewardType','questProgress')->where('dialog',$droplist->dialog) as $quest){
				foreach($this->model->getDroplistItems()->where('droplistID',$droplist->rewardID) as $item) {
					$insert = ['quest' => $quest->rewardID, 'item' => $item->itemID, 'quantity' => $item->quantityMin];
					if (!$this->model->getQuestsItems()->where($insert)->fetch()){
						$insert['dialog'] = $dialog->dialog;

						$output->writeln($insert['quest'].' '.$insert['item'].' droplist '.$insert['quantity']);
						$this->model->getQuestsItems()->insert($insert);
						$itemCount++;
					}
				}
			}
		}

		$output->writeln('');
		$output->writeln('<info>Finished assigning '.$itemCount.' item to quest</info>');

		return 0; // zero return code means everything is ok
    }
}
