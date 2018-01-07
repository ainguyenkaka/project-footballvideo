<?php
abstract class AbstractController {
	
	public function execute($request) {

		switch ($request) {
			case "GET" :
				$this->doGet ();
				break;
			case "POST" :
				$this->doPost ();
				break;
			default :
				;
				break;
		}
	}
	function doGet() {
		$action = $_GET ["action"];
		if (isset ( $action )) {
			switch ($action) {
				case "del" :
					$this->delete ();
					break;
				case "save" :
					$this->save ();
					break;
				default :
					;
					break;
			}
		}
	}
	function doPost() {
		$action = $_GET ["action"];
		if (isset ( $action )) {
			switch ($action) {
				case "add" :
					$this->add ();
					break;
				case "update" :
					$this->update ();
					break;
				default :
					;
					break;
			}
		}
	}
	abstract function add();
	abstract function delete();
	abstract function update();
	abstract function save();
}
class VideoController extends AbstractController {
	private $manager;
	public function VideoController($manager) {
		$this->manager = $manager;
	}
	
	function add() {
		$this->addOrUpdate ( 1 );
	}
	function delete() {
		$id = $_GET ["id"];
		$this->manager->remove ( $id );
	}
	function update() {
		
		$this->addOrUpdate ( 2 );
	}
	function addOrUpdate($type) {
		$id = $_POST ["id"];
		$name = $_POST ["name"];
		$img = $_POST ["img"];
		$des = $_POST ["des"];
		$source = $_POST ["source"];
		
		$rating = "9.1";
		$cId = "C002";
		
		$video = new Video ( $id, $name, $img, $des, $rating, $source, $cId );
		
		if ($type === 1)
			$this->manager->add ( $video );
		else {
			$this->manager->update ( $video );

		}
		
	}
	function save() {
		$this->manager->save();
	}
}
