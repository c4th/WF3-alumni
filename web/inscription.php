<?php
require_once(__DIR__ . '/../vendor/Autoload.php');
$inscription = new \Frontoffice\Controller\EtudiantController();
$inscription->inscriptionDisplay();