<?php
require_once 'AbstractManager.php';
require_once 'entities/Video.php';

class VideoManager extends AbstractManager{
	
	public static function Instance() {
		static $inst = null;
		if ($inst === null) {
			$inst = new VideoManager ();
		}
		return $inst;
	}
	

	public function getFileName(){
		return "videos.json";
	}
	
	public function loadDefaultData() {
		$this->add(new Video("Chelsea vs Tottenham", "ct", "Really", "8.1", "o6ixdlmmj1el5qh/chelsea-tottenham", "C001"));
		$this->add(new Video("Ronaldo", "ronaldo", "Really", "8.2", "n0arzgxv5sm4rej/rolnaldo-skills", "C002"));
		$this->add(new Video( "Barcelona vs Atletico", "ba", "Really", "8.3", "dho9wx7tz6v3msx/barcelona-atletico", "C002"));
		$this->add(new Video("Sothanton vs MU", "sm", "Really", "8.1", "urokk7yk9z4et2q/southampton-manchester", "C001"));
		$this->add(new Video( "Tottenham vs MU", "tm", "Really", "8.2", "22rpxy30nck9teu/tottenham-mu", "C002"));
		$this->add(new Video("C Ronaldo", "ronaldo", "Really", "8.3", "n0arzgxv5sm4rej/rolnaldo-skills", "C002"));
		$this->add(new Video("Chelsea Tranning", "chelseavsarseanl", "Really", "8.1", "u116q3n7y1iyrpy/chelsea-trainning", "C001"));
		
		$this->add(new Video( "Chelsea vs Tottenham", "ct", "Really", "8.1", "o6ixdlmmj1el5qh/chelsea-tottenham", "C001"));
		$this->add(new Video( "Ronaldo", "chelseavsarseanl", "Really", "8.2", "n0arzgxv5sm4rej/rolnaldo-skills", "C002"));
		$this->add(new Video("Barcelona vs Atletico", "ba", "Really", "8.3", "dho9wx7tz6v3msx/barcelona-atletico", "C002"));
		$this->add(new Video( "Sothanton vs MU", "sm", "Really", "8.1", "urokk7yk9z4et2q/southampton-manchester", "C001"));
		$this->add(new Video( "Tottenham vs MU", "tm", "Really", "8.2", "22rpxy30nck9teu/tottenham-mu", "C002"));
		$this->add(new Video( "C Ronaldo", "ronaldo", "Really", "8.3", "n0arzgxv5sm4rej/rolnaldo-skills", "C002"));
		$this->add(new Video( "Chelsea Tranning", "chelseavsarseanl", "Really", "8.1", "u116q3n7y1iyrpy/chelsea-trainning", "C001"));
	}
}

