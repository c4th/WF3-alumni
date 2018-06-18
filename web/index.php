<?php
require_once(__DIR__ . '/../vendor/Autoload.php');
$home = new \Frontoffice\Controller\HomeController();
$home->homeDisplay();

//echo 'Nombre instances : ' . \Frontoffice\Controller\SidebarController::$instances;