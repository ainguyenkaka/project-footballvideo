<?php
require_once 'AbstractManager.php';
require_once 'entities/User.php';

class UserManager extends AbstractManager{
	
	public static function Instance() {
		static $inst = null;
		if ($inst === null) {
			$inst = new UserManager ();
		}
		return $inst;
	}
	
	public function getFileName(){
		return "users.json";
	}
	
	public function loadDefaultData() {
		$this->add(new User("U001", "Kaka", "kaka@gmail.com"));
		$this->add(new User("U002", "Tom", "tom@gmail.com"));
		$this->add(new User("U003", "Terry", "terry@gmail.com"));
	}
}


