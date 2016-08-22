<?php
/**
 * Created by JetBrains PhpStorm.
 * User=> Jakub
 * Date=> 1.9.14
 * Time=> 12=>02
 * To change this template use File | Settings | File Templates.
 */

namespace App\Presenters;


use App\Console\ParseUtils;
use Nette\Database\Table\ActiveRow;
use Nette\Utils\ArrayHash;
use Nette\Utils\Html;
use Nette\Utils\Image;
use Nette\Utils\Json;
use Tracy\Debugger;

class ZeroSevenZeroPresenter extends BasePresenter{
	public $VERSION = '0.7.0';

	/** @var \App\Model\ZeroSevenZeroModel @inject */
	public $model;

	/** @var \App\Model\ZeroSevenZeroTableModel @inject */
	public $tableModel;

	public function beforeRender(){
		parent::beforeRender();

		$this->template->quest_icon = 'ui_icon_quest:0';
		$this->template->map_icon = 'ui_icon_map:0';
	}

	public function getCharacterKind(ActiveRow $character){
		return (is_null($character->attackDamageMin)) ? 'npc' :  'monster';
	}

	public function renderItemList(){
		$this->template->tables = $this->tableModel->getItemsTable();
		$this->template->type = $this->tableModel->getItemTypes();
		$this->template->equipment = $this->model->getItems();
		$this->template->getCharacterKind = $this->getCharacterKind;
	}

	public function renderConsumableList(){
		$this->template->tables = $this->tableModel->getConsumablesTable();
		$this->template->consumable = $this->model->getConsumables();
		$this->template->getCharacterKind = $this->getCharacterKind;
	}

	public function renderMonsterList(){
		$this->template->colums = $this->tableModel->getMonstersColumns();
		$this->template->tables = $this->tableModel->getMonstersTable();

		$this->template->monsters = $this->model->getMonsters()->order('spawnGroup');

//		$monsters = $this->model->getCharacters()->where('NOT attackDamageMin',NULL)->order('spawnGroup');
//		$this->template->monsters = $monsters;
	}

	public function renderNpcList(){
		$this->template->tables = $this->tableModel->getNcpTable();
		$this->template->nps = $this->model->getNpc();
	}

	public function renderConditionList(){
		$this->template->conditions = $this->model->getConditions();
		$this->template->tables = $this->tableModel->getConditionsTable();
	}

	public function renderQuestList(){
		$this->template->tables = $this->tableModel->getQuestsTable();

		$this->template->quests = $this->model->getQuests()->where('showInLog',TRUE);
		$this->template->items = $this->model->getItems()->where('displaytype','quest');

		$this->template->getCharacterKind = $this->getCharacterKind;
	}

	public function renderAreaMap($map){
		$areaMapScale = ($map == 'world1') ? 1/16 : 1/4;
		$scale = ($map == 'world1') ? 2 : 8;

		$this->template->version = $this->VERSION;
		$this->template->map = $map;

		$worldMapFile = $this->options->resDir.'/'.$this->VERSION.'/xml/worldmap.xml';
		$worldMap = simplexml_load_file($worldMapFile);
//		$segments = $worldMap->xpath("/worldmap/segment");
//
//		$menuSubMaps = [];
//		foreach($segments as $segment){
//			$segment_id = (string) $segment['id'];
//			if($map == $segment_id) $areaMap = $segment;
//			if ($segment_id != 'world1') $menuSubMaps[] = $segment_id;
//		}
//
//		$menuSubMaps = $this->model->getMaps()->where('id',$menuSubMaps)->fetchPairs('id','name');

		$areaMap = $worldMap->xpath("/worldmap/segment[@id='$map']")[0];

		$menuSubMaps = $this->model->getAreMapsArray('world1');
		$this->template->menuSubMaps = $menuSubMaps;

		$subMaps = [];
		$width = 0;
		$height = 0;
		foreach($worldMap->xpath("/worldmap/segment[@id='$map']/map") as $localMap){
			$id = (string) $localMap['id'];

			$subMap = new ArrayHash;
			$subMap->x = (intval($localMap['x']) - intval($areaMap['x']))*$scale;
			$subMap->y = (intval($localMap['y']) - intval($areaMap['y']))*$scale;

			$image = Image::fromFile($this->options->renderDir.'/'.$this->VERSION.'/map/'.$id.'.png');
			$image->resize(($areaMapScale*100).'%',NULL);

			$subMap->width = $image->width;
			$subMap->height = $image->height;

			if (($subMap->x + $subMap->width) > $width) $width = ($subMap->x + $subMap->width);
			if (($subMap->y + $subMap->height) > $height) $height = ($subMap->y + $subMap->height);

			$render = $this->getSession('render');
			if ($render->areaMapImages) $image->save($this->options->renderDir.'/'.$this->VERSION.'/map/'.$id.'_area.jpg', 80, Image::JPEG);
			$subMaps[$id] = $subMap;
		}

		$this->template->submaps = $subMaps;
		$this->template->width = $width;
		$this->template->height = $height;
	}

	public function renderMap($map = null){
		if ((!$map)or($map=='world1')) $this->forward('areamap','world1');

		$ICON_SIZE = 32;

		$this->template->version = $this->VERSION;
		$this->template->map = $map;

		$worldMapFile = $this->options->resDir.'/'.$this->VERSION.'/xml/worldmap.xml';
		$worldMap = simplexml_load_file($worldMapFile);
//		$segments = $worldMap->xpath("/worldmap/segment[@id!='world1']");

//		foreach($segments as $segment) $menuSubMaps[] = (string) $segment->attributes()['id'];
//		$menuSubMaps = $this->model->getMaps()->where('id',$menuSubMaps)->fetchPairs('id','name');
//		$this->template->menuSubMaps = $menuSubMaps;

		$menuSubMaps = $this->model->getAreMapsArray('world1');
		$this->template->menuSubMaps = $menuSubMaps;

		if (array_key_exists($map,$menuSubMaps)) $this->forward('areamap',$map);

		$this->template->mapName = $this->model->getMaps()->get($map)->name;

		$segment = $worldMap->xpath("/worldmap/segment/map[@id='".$map."']/parent::segment");
		if ($segment) $areamap = (string) $segment[0]->attributes()['id']; else $areamap = null;
		$this->template->areamap = $areamap;

		$xmlFile = $this->options->resDir.'/'.$this->VERSION.'/xml/'.$map.'.tmx';
		$xml = simplexml_load_file($xmlFile);

		$string = $xml->xpath("/map/layer[@name='Walkable']/data");
		$string = (string) $string[0];
		$walk = ParseUtils::decodeMapLayer($string);

		$string = $xml->xpath("/map/layer[@name='Above']/data");
		$string = (string) $string[0];
		$above = ParseUtils::decodeMapLayer($string);

		$free = array_map(function () {
			return array_sum(func_get_args());
		}, $walk, $above);

		$free = array_flip(array_keys($free,0));

		$width = (int) $xml['width'];
		$height = (int) $xml['height'];

		$this->template->height = $height*$ICON_SIZE;
		$this->template->width = $width*$ICON_SIZE;

		$links = [];

		foreach ($xml->xpath("/map/objectgroup/object[@type='mapchange']") as $event){
			if (isset($event->properties)) $link = Html::el('a')->href($event->properties->property[0]['value'].'.html#'.$event->properties->property[1]['value']);
			else $link = Html::el('div');

			$link->id = $event['name'];
			$link->class = 'entrance';
			$link->style('width',$event['width'].'px');
			$link->style('height',$event['height'].'px');
			$link->style('left',$event['x'].'px');
			$link->style('top',$event['y'].'px');

			unset($free[ParseUtils::mapPosition(round($event['x'] / $ICON_SIZE),round($event['y'] / $ICON_SIZE),$width)]);

			$links[] = $link;
		}

		foreach ($xml->xpath("/map/objectgroup/object[@type='sign']") as $sign){
			$name = (string) $sign['name'];
			$item = $this->model->getDialog()->where('message IS NOT NULL')->get($name);
			if ($item) {
				$link = Html::el('a class=sign');
				//$link->data['message'] = str_replace("\n", '&#10;', $item['message']);
				$link->data['message'] = $item->message;
				$link->href("javascript:sign('".$sign['name']."')");

				$link->id = $sign['name'];
				$link->style('width',$sign['width'].'px');
				$link->style('height',$sign['height'].'px');
				$link->style('left',$sign['x'].'px');
				$link->style('top',$sign['y'].'px');

				$links[] = $link;

				unset($free[ParseUtils::mapPosition(round($sign['x'] / $ICON_SIZE),round($sign['y'] / $ICON_SIZE),$width)]);
			}
		}

		$spawns = [];
		$spawnIds = [];

		foreach ($xml->xpath("/map/objectgroup/object[@type='spawn']") as $spawn){
			$count = $spawn->xpath("properties/property[@name='quantity']");
			$count = empty($count) ? 1 : intval($count[0]['value']);

			for ($i=1;$i<=$count;$i++) {
				$min_x = floor(intval($spawn['x'])/$ICON_SIZE);
				$min_y = floor(intval($spawn['y'])/$ICON_SIZE);
				$max_x = floor(intval($spawn['width'])/$ICON_SIZE);
				$max_y = floor(intval($spawn['height'])/$ICON_SIZE);

				if ($max_x + $max_y > 2) {
					for($j=1;$j<=100;$j++){
						$pos_x = rand(0, $max_x-1);
						$pos_y = rand(0, $max_y-1);
						$p = ParseUtils::mapPosition($min_x+$pos_x,$min_y+$pos_y,$width);
						if (array_key_exists($p,$free)) break;
					}
				}else {
					$pos_x = 0;
					$pos_y = 0;
				}

				$position = ParseUtils::mapPosition($min_x+$pos_x,$min_y+$pos_y,$width);
				if (!array_key_exists($position,$free)) $needAbove = TRUE;

				$spawn_id = strtolower(strval($spawn['name']));
				$spawnIds[] = $spawn_id;

				$area = new ArrayHash;
				$area->x = ($min_x+$pos_x)*$ICON_SIZE;
				$area->y = ($min_y+$pos_y)*$ICON_SIZE;
				$area->spawn_id = $spawn_id;

				$spawns[] = $area;

				unset($free[$position]);
			}
		}

		$monsters = [];
		foreach($this->model->getCharacters()->where('spawnGroup',array_unique($spawnIds))as $monster)
			$monsters[$monster->spawnGroup][] = $monster;

		Debugger::barDump($monsters);

		foreach($spawns as $area) $area->monster = $monsters[$area->spawn_id][array_rand($monsters[$area->spawn_id])];



		$this->template->getCharacterKind = $this->getCharacterKind;
		$this->template->spawns = $spawns;
		$this->template->links = $links;
		$this->template->needAbove = isset($needAbove) ? $needAbove : FALSE;
	}

}