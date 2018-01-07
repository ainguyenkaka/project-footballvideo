<?php
require_once 'AbstractManager.php';
require_once 'entities/Category.php';

class CategoryManager extends AbstractManager{
	
	public static function Instance() {
		static $inst = null;
		if ($inst === null) {
			$inst = new CategoryManager ();
		}
		return $inst;
	}
	

	public function getFileName(){
		return "categories.json";
	}
	
	public function loadDefaultData() {
		$this->add(new Category("C001", "Highlight"));
		$this->add(new Category("C002", "Hot"));
		$this->add(new Category("C003", "News"));
	}
}

// $manager = new CategoryManager();

// $manager->load();

// $manager->save();
