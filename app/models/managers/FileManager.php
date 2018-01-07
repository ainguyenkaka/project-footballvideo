<?php


class FileManager{
	public static function Instance() {
		static $inst = null;
		if ($inst === null) {
			$inst = new FileManager ();
		}
		return $inst;
	}
	
	private function __construct() {
		
	}
	
	
	private function writeTextToFile($text,$fileName) {
		file_put_contents($fileName,$text,FILE_USE_INCLUDE_PATH);
	}
	
	private function readTextFromFile($fileName){
		$json  = file_get_contents($fileName, FILE_USE_INCLUDE_PATH);
		return $json;
	}
	
	public function saveJson($json, $fileName) {
		$this->writeTextToFile($json, $fileName);
	}
	
	public function loadJson($fileName){
		return $this->readTextFromFile($fileName);
	}
	
}

