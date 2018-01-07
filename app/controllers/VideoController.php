<?php
include '../views/sessions.php';
require_once 'AbstractController.php';

$location = "/admin/videos";

$request = $_SERVER ["REQUEST_METHOD"];

$controller = new VideoController($videoManager);
$controller->execute($request);



header ( "Location: " . $location );
die ();