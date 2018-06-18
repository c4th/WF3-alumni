<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$annuaireEtudiants = new \Frontoffice\Controller\EtudiantController();
$annuaireEtudiants->annuaireEtudiantsDisplay();