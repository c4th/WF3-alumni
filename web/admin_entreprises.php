<?php
require_once(__DIR__ . '/../vendor/Autoload.php');
$home = new \Backoffice\Controller\AdminEntreprisesController();
$home->entreprisesDisplay();
