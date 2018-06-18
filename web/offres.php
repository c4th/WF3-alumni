<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$offres = new \Frontoffice\Controller\OffreController();
$offres->offresDisplay();