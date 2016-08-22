<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jakub
 * Date: 1.9.14
 * Time: 17:24
 * To change this template use File | Settings | File Templates.
 */

namespace App\Model;


use Nette\Utils\Arrays;

class Options extends \Nette\Object{
	private  $menu;
	private  $versions;
	private  $resDir;
	private  $renderDir;
	private  $wwwDir;

	public function __construct(array $menu, array $versions, $resDir, $renderDir, $wwwDir) {
		$this->menu = $menu;
		$this->versions = $versions;
		$this->resDir = $resDir;
		$this->renderDir = $renderDir;
		$this->wwwDir = $wwwDir;
	}

	public function getMenu(){
		return $this->menu;
	}

	public function getPages(){
		$pages = $this->getMenu();
		$pages['version'] = 'version';
		return $pages;
	}

	public function getVersions(){
		return $this->versions;
	}

	public function getVersionName($version){
		return Arrays::get($this->versions,$version);
	}

	public function getDefaultVersion(){
		end($this->versions);
		$key = key($this->versions);
		reset($this->versions);
		return $key;
	}

	public function getResDir(){
		return $this->resDir;
	}

	public function getRenderDir(){
		return $this->renderDir;
	}

	public function getWwwDir(){
		return $this->wwwDir;
	}
}