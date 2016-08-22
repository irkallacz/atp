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

class ImportItemCommand extends Command{

	/** @var \App\Model\Options @inject*/
	public $options;

	public $model;

	protected function configure(){
        $this->setName('database:importItem')
	        ->setDescription('Load items form .json files to database')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('files',InputArgument::IS_ARRAY, 'Name of file to load (separate multiple names with a space)');
    }

	protected function execute(InputInterface $input, OutputInterface $output){
		Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();
		$this->model = $this->getHelper('container')->getByType('App\Model\\'.$this->options->getVersionName($version));

	    $files = $input->getArgument('files');
	    if (!$files) $files = 'itemlist*.json';

	    $inDir = $this->options->resDir.'/'.$version.'/raw/';

	    $finder = Finder::findFiles($files)
		    ->exclude('itemlist_pre0610_unused.json')
		    ->in($inDir);

	    $fileCount = iterator_count($finder->getIterator());

	    $this->model->getDatabase()->beginTransaction();
		$this->model->deleteTable($this->model->getItems()->getName());
		$this->model->deleteTable($this->model->getEquipment()->getName());
		$this->model->deleteTable($this->model->getItemsCategory()->getName());
		$this->model->deleteTable($this->model->getItemsConditions()->getName());

	    $json = file_get_contents($inDir.'itemcategories_1.json');
	    $items = Json::decode($json,Json::FORCE_ARRAY);

	    $itemCount = 0;
	    foreach ($items as $item) $this->model->getItemsCategory()->insert($item);

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
			    $equip = Arrays::get($item,'equipEffect',FALSE);
			    $conditions = [];

			    if (isset($item['hitEffect'])){
				    if(isset($item['hitEffect']['conditionsTarget']))
					    $conditions['hitTarget'] = $item['hitEffect']['conditionsTarget'];

				    if (isset($item['hitEffect']['conditionsSource']))
					    $conditions['hitSource'] = $item['hitEffect']['conditionsSource'];
		        }

			    if (isset($item['killEffect'])){
				    if(isset($item['killEffect']['conditionsTarget']))
					    $conditions['killTarget'] = $item['killEffect']['conditionsTarget'];

				    if (isset($item['killEffect']['conditionsSource']))
					    $conditions['killSource'] = $item['killEffect']['conditionsSource'];
			    }

			    if ((isset($item['useEffect']))and(isset($item['useEffect']['conditionsSource'])))
					    $conditions['useSource'] = $item['useEffect']['conditionsSource'];

			    $item = ParseUtils::JsonArray($item);

			    $item['filename'] = $file->getFilename();
			    //Debugger::dump($item);
			    $this->model->getItems()->insert($item);

			    if($equip) {
					ParseUtils::expandArrayKey($equip,'increaseAttackDamage');

				    if (isset($equip['addedConditions'])) $conditions['equipSource'] = $equip['addedConditions'];

				    $equip = ParseUtils::JsonArray($equip);
				    $equip['item'] = $item['id'];
				    $this->model->getEquipment()->insert($equip);
			    }

			    foreach($conditions as $source => $conditionList){
					foreach($conditionList as $condition) {
						$properities = preg_split('/(?=[A-Z])/', $source);
						$condition['item'] = $item['id'];
						$condition['event'] = $properities[0];
						$condition['target'] = strtolower($properities[1]);

						$this->model->getItemsConditions()->insert($condition);
					}
			    }
		    }
		    $bar->finish();
	        $output->writeln('');
		    $itemCount += $count;
		}

	    $this->model->getDatabase()->commit();

	    $output->writeln('');
	    $output->writeln('<info>Finished importing '.$itemCount.' items in '.$fileCount.' json files</info>');

        return 0; // zero return code means everything is ok
    }
}
