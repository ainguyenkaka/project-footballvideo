<?php
require_once 'AbstarctEntity.php';

class Category extends AbstractEntity{
	function Category($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}
}