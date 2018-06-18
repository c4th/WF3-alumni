<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$enseignements = new \Frontoffice\Controller\EnseignementsController();
$enseignements->enseignementsDisplay();