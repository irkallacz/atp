<?php
namespace App\Console;

use Nette\Utils\Finder;
use Nette\Utils\Image;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tracy\Debugger;

class CreateMapAllCommand extends Command{

	/** @var \Nette\Application\Application @inject */
	public $app;

	/** @var \App\Model\Options @inject*/
	public $options;

	protected function configure(){
        $this->setName('map:createAll')
	        ->setDescription('Create all map files including images, map html pages, areamap html pages etc.')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
	    Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();

	    $command = $this->getApplication()->find('map:createImage');
		$input = new ArrayInput(['command' => 'map:createImage','version' => $version]);
	    $command->options = $this->options;
	    $command->run($input,$output);

	    $command = $this->getApplication()->find('map:createFile');
	    $input = new ArrayInput(['command' => 'map:createFile','version' => $version]);
	    $command->options = $this->options;
	    $command->app = $this->app;
	    $command->run($input,$output);

	    $command = $this->getApplication()->find('map:createAreaFile');
	    $input = new ArrayInput(['command' => 'map:createAreaFile','version' => $version]);
	    $command->options = $this->options;
	    $command->app = $this->app;
	    $command->run($input,$output);

	    return 0; // zero return code means everything is ok
    }
}
