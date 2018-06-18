<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$entreprise = new \Frontoffice\Controller\EntrepriseController();
$entreprise->inscription_entrepriseDisplay();