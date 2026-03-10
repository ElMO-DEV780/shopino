<?php
require_once "view/classes/view.class.php";
$home = new View("view/home.view.php");
$home->viewPage();

$about = new View("view/about.view.php");
$about->viewPage();

$services = new View("view/services.view.php");
$services->viewPage();