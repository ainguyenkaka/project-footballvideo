<?php
require_once 'FileManager.php';
abstract class AbstractManager {
	private $path;
	public $map;
	public function AbstractManager() {
		$this->map = array ();
		$this->path = "../models/managers/data/";
		$this->load ();
		// $this->loadDefaultData();
	}
	public function isExisted($id) {
		return isset ( $this->map [$id] );
	}
	public function get($id) {
		return $this->map [$id];
	}
	public function count() {
		return count ( $this->map );
	}
	public function all() {
		return array_values ( $this->map );
	}
	public function add($item) {
		if (! isset ( $item->id )) {
			$item->id = $this->generateID ();
		}
		if ($this->isExisted ( $item->id )) {
			return add ( $item );
		}
		
		$this->map [$item->id] = $item;
		
		return true;
	}
	public function remove($id) {
		if ($this->isExisted ( $id )) {
			unset ( $this->map [$id] );
			return true;
		}
		return false;
	}
	public function update($item) {
		if ($this->isExisted ( $item->id )) {
			$this->map [$item->id] = $item;
		}
		return false;
	}
	public function setPath($path) {
		$this->path = $path;
	}
	public function getFullPath() {
		$fileName = $this->getFileName ();
		return $this->path . $fileName;
	}
	public function save() {
		$json = json_encode ( array_values($this->map) );
		$path = $this->getFullPath ();
		FileManager::Instance ()->saveJson ( $json, $path );
	}
	public function load() {
		$path = $this->getFullPath ();
		$json = FileManager::Instance ()->loadJson ( $path );
		$list = json_decode ( $json );
		if ($list === null || count ( $list ) <= 1)
			$this->loadDefaultData ();
		else {
			foreach($list as $item){
				$this->add($item);
			}
		}
	}
	function generateID($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen ( $characters );
		$randomString = '';
		for($i = 0; $i < $length; $i ++) {
			$randomString .= $characters [rand ( 0, $charactersLength - 1 )];
		}
		return $randomString;
	}
	public abstract function getFileName();
	public abstract function loadDefaultData();
}
