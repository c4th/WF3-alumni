<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$projetsRealises = new \Frontoffice\Controller\ProjetController();
$projetsRealises->projetsRealisesDisplay();