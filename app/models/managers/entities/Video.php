<?php
require_once 'AbstractEntity.php';

class Video extends AbstractEntity{
	public $des;
	public $source;
	public $view;
	public $cId;
	public $rating;
	public $img;

	
	function Video($name,$img,$des,$rating,$source,$cId) {
	
		$this->name = $name;
		$this->img = $img;
		$this->des = $des;
		$this->rating = $rating;
		$this->source = $source;
		$this->view = 0;
		$this->cId = $cId;
	}
	

	
}