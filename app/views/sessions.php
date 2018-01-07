<?php
require_once '../models/managers/UserManager.php';
require_once  '../models/managers/VideoManager.php';

//session_start();

if(!isset($_SESSION["userManager"])){
	$_SESSION["userManager"] = UserManager::Instance();
}

if(!isset($_SESSION["videoManager"])){
	$_SESSION["videoManager"] = VideoManager::Instance();
}

$userManager = $_SESSION["userManager"];
$videoManager = $_SESSION["videoManager"];

$videos = $videoManager->all();

//session_destroy();