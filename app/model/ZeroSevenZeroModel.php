<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jakub
 * Date: 1.9.14
 * Time: 16:34
 * To change this template use File | Settings | File Templates.
 */

namespace App\Model;


use Nette\Database\SqlLiteral;

class ZeroSevenZeroModel extends \Nette\Object {

	/** @var \Nette\Database\Context */
	protected $database;

	public function __construct(\Nette\Database\Context $context) {
		$this->database = $context;
	}

	public function deleteTable($table) {
		return $this->database->query('TRUNCATE TABLE ?',new SqlLiteral('`'.$table.'`'));
	}

	public function getDatabase() {
		return $this->database;
	}

	public function getMaps() {
		return $this->database->table('map');
	}

	public function getAreMapsArray($exclude = NULL) {
		$menu = $this->getMaps()->where('area',1);
		if ($exclude) $menu->where('NOT id',$exclude);
		return $menu->fetchPairs('id','name');
	}

	public function getSpawns() {
		return $this->database->table('spawn');
	}
	public function getMapSpawns() {
		return $this->database->table('map_spawn');
	}

	public function getItemsCategory() {
		return $this->database->table('category');
	}

	public function getDroplists() {
		return $this->database->table('droplist');
	}

	public function getDroplistItems() {
		return $this->database->table('droplist_item');
	}

	public function getDialog() {
		return $this->database->table('dialog');
	}

	public function getDialogRewards() {
		return $this->database->table('dialog_reward');
	}

	public function getDialogReplies() {
		return $this->database->table('dialog_reply');
	}

	public function getDialogRepliesRequires() {
		return $this->database->table('dialog_replay_require');
	}

	public function setDefaultDialog() {
		$this->getDialog()->insert(['id'=>'S']);
		$this->getDialog()->insert(['id'=>'F']);
		$this->getDialog()->insert(['id'=>'R']);
		$this->getDialog()->insert(['id'=>'X']);
	}

	public function getQuests() {
		return $this->database->table('quest');
	}

	public function getQuestStages() {
		return $this->database->table('quest_stage');
	}

	public function getItems() {
		return $this->database->table('item');
	}

	public function getConsumables() {
		return $this->getItems()->where('category',['food','drink','pot','animal_e']);
	}

	public function getItemsConditions() {
		return $this->database->table('item_condition');
	}

	public function getQuestsItems() {
		return $this->database->table('quest_item');
	}

	public function getQuestsCharacters() {
		return $this->database->table('quest_monster');
	}

	public function getCharacters() {
		return $this->database->table('monster');
	}

	public function getCharacterConditions() {
		return $this->database->table('monster_condition');
	}

	public function getMonsters() {
		return $this->getCharacters()->where('NOT attackDamageMin',NULL);
	}

	public function getNpc() {
		return $this->getCharacters()->where('attackDamageMin',NULL);
	}
	public function getConditions() {
		return $this->database->table('condition');
	}

	public function getEquipment() {
		return $this->database->table('equip');
	}

}




