<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$etudiant = new \Frontoffice\Controller\EtudiantController();
$etudiant->etudiantDisplay();