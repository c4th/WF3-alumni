<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$entreprises = new \Frontoffice\Controller\EntrepriseController();
$entreprises-> entreprisesDisplay();