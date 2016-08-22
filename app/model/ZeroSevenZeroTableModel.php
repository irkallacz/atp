<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jakub
 * Date: 8.9.14
 * Time: 0:58
 * To change this template use File | Settings | File Templates.
 */

namespace App\Model;

use Nette\Object;

class ZeroSevenZeroTableModel extends Object {

	public function getItemsTable(){
		return [
			'weapon' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseAttackCost' => 'Attack cost',
					'increaseAttackChance' => 'AC%',
					'damage' => 'Dmg',
					'increaseCriticalSkill' => 'Crit',
					'setCriticalMultiplier' => 'Crit*',
					'increaseBlockChance' => 'BC%',
					'increaseMaxAP' => 'Max AP',
					'category' => 'Category',
					'cond' => 'Cond',
				],
				'slot' => 'weapon',
				'width' => '80%',],
			'shield' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseBlockChance' => 'BC%',
					'increaseDamageResistance' => 'Dmg Resistance',
					'increaseAttackChance' => 'AC%',
					'increaseCriticalSkill' => 'Crit',
					'category' => 'Category',
				],
				'slot' => 'shield',
				'width' => '50%',
			],
			'armor' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseBlockChance' => 'BC%',
					'increaseDamageResistance' => 'Dmg Resistance',
					'increaseAttackChance' => 'AC%',
					'damage' => 'Dmg',
					'increaseMaxHP' => 'HP',
					'increaseCriticalSkill' => 'Crit',
					'increaseAttackCost' => 'Attack cost',
					'increaseMoveCost' => 'Move cost',
					'category' => 'Category',
					'cond' => 'Cond',
				],
				'slot' => 'body',
				'width' => '80%',
			],
			'helm' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseBlockChance' => 'BC%',
					'increaseDamageResistance' => 'Dmg Resistance',
					'increaseAttackChance' => 'AC%',
					'damage' => 'Dmg',
					'increaseMaxHP' => 'HP',
					'increaseCriticalSkill' => 'Crit',
					'increaseMoveCost' => 'Move cost',
					'category' => 'Category',
					'cond' => 'Cond',
				],
				'slot' => 'head',
				'width' => '70%',
			],
			'glove' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseBlockChance' => 'BC%',
					'increaseDamageResistance' => 'Dmg Resistance',
					'increaseAttackChance' => 'AC%',
					'damage' => 'Dmg',
					'increaseMaxHP' => 'HP',
					'increaseCriticalSkill' => 'Crit',
					'category' => 'Category',
					'cond' => 'Cond',
				],
				'slot' => 'hand',
				'width' => '70%',
			],
			'boot' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseBlockChance' => 'BC%',
					'increaseDamageResistance' => 'Dmg Resistance',
					'increaseAttackChance' => 'AC%',
					'damage' => 'Dmg',
					'increaseMaxHP' => 'HP',
					'increaseCriticalSkill' => 'Crit',
					'increaseMoveCost' => 'Move cost',
					'category' => 'Category',
				],
				'slot' => 'feet',
				'width' => '70%',
			],
			'necklace' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseBlockChance' => 'BC%',
					'increaseAttackChance' => 'AC%',
					'increaseDamageResistance' => 'Dmg Resistance',
					'increaseMaxHP' => 'HP',
					'increaseCriticalSkill' => 'Crit',
					'increaseAttackCost' => 'Attack cost',
				],
				'slot' => 'neck',
				'width' => '60%',
			],
			'ring' =>[
				'fields' =>[
					'icon' => ' ',
					'name' => 'Name',
					'increaseBlockChance' => 'BC%',
					'increaseAttackChance' => 'AC%',
					'damage' => 'Dmg',
					'increaseDamageResistance' => 'Dmg Resistance',
					'increaseMaxHP' => 'HP',
					'increaseCriticalSkill' => 'Crit',
					'cond' => 'Cond',
				],
				'slot' => 'leftring',
				'width' => '60%',
			],
		];
	}

	public function getItemTypes(){
		return array_flip(['ordinary','quest','rare','extraordinary','legendary']);
	}

	public function getConsumablesTable(){
		return [
			'potion'=> [
				'fields' => [
					'icon'=>' ',
					'name'=>'Name',
					'hp'=>'HP',
					'cond'=>'Cond'
				],
				'width' => '50%','category'=> 'pot'],

			'food'=> [
				'fields' => [
					'icon'=>' ',
					'name'=>'Name',
					'cond'=>'Cond'
				],
				'width' => '30%','category'=> ['0'=>'food','1'=>'animal_e']],

			'drink'=> [
				'fields' => [
					'icon'=>' ',
					'name'=>'Name',
					'hp'=>'HP',
					'cond'=>'Cond'
				],
				'width' => '50%','category'=> 'drink']
		];
	}

	public function getNcpTable(){
		return [
			'merchant'=> [
				'fields' => ['icon'=>' ','name'=>'Name','location'=>'Location'],
				'droplist' => 'IS NOT NULL',
				'width' => '40%'
			],
			'npc'=> [
				'fields' => ['icon'=>' ','name'=>'Name','location'=>'Location'],
				'droplist' => 'IS NULL',
				'width' => '40%'
			]
		];
	}

	public function getMonstersTable(){
		return ['animal','insect','reptile','humanoid','giant','demon','ghost','undead','construct'];
	}

	public function getMonstersColumns(){
		return [
			'icon'=>' ',
			'name'=>'Name',
			'maxHP'=>'HP',
			'attackChance'=>'AC%',
			'damage'=>'Dmg',
			'criticalSkill'=>'Crit',
			'criticalMultiplier'=>'Crit*',
			'blockChance'=>'BC%',
			'damageResistance'=>'Dmg resis',
			'maxAP'=>'AP',
			'attackCost'=>'Attack cost',
			'moveCost'=>'Move cost',
			'xp'=>'XP',
			'cond'=>'Cond'
		];
	}

	public function getConditionsTable(){
		return [
			'positive'=> [
				'fields' => [
					'icon'=>' ',
					'name'=>'Name',
					'increaseMaxHP'=>'HP',
					'increaseAttackChance'=>'AC%',
					'damage'=>'Dmg',
					'increaseCriticalSkill'=>'Crit',
					'increaseBlockChance'=>'BC%',
					'increaseDamageResistance'=>'Dmg resis',
					'increaseMaxAP'=>'AP',
					'increaseAttackCost'=>'Attack cost',
					'increaseMoveCost'=>'Move cost',
					'stackable'=>'Stackable',
					'cond'=>'On every round',
					'category'=>'Category'
				],
				'width' => '80%','positive'=> 1],

			'negative'=> [
				'fields' => [
					'icon'=>' ',
					'name'=>'Name',
					'increaseMaxHP'=>'HP',
					'increaseAttackChance'=>'AC%',
					'damage'=>'Dmg',
					'increaseCriticalSkill'=>'Crit',
					'increaseBlockChance'=>'BC%',
					'increaseDamageResistance'=>'Dmg resis',
					'increaseMaxAP'=>'AP',
					'increaseAttackCost'=>'Attack cost',
					'increaseMoveCost'=>'Move cost',
					'stackable'=>'Stackable',
					'cond'=>'On every round',
					'category'=>'Category'
				],
				'width' => '80%','positive'=> 0]
		];
	}

	public function getQuestsTable(){
		return [
			'quest'=>'quest',
			'item'=>'item'
		];
	}
}