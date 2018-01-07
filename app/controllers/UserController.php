<?php

include '../views/sessions.php';
$location = "/users";

$request = $_SERVER ["REQUEST_METHOD"];

$controller = new UserController($userManager);
$controller->execute($request);

// header ( "Location: " . $location );
// die ();