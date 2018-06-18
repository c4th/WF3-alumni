<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$contact = new \Frontoffice\Controller\ContactController();
$contact->contactDisplay();

// echo 'Nombre instances : ' . \Frontoffice\Controller\SidebarController::$instances;