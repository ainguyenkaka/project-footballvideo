<?php
require_once 'AbstractEntity.php';

class User extends AbstractEntity{
	public $email;
	public $role;
	
	function User($id,$name,$email) {
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->role = "client";
	}
}