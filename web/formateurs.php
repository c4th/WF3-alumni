<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$formateurs = new \Frontoffice\Controller\FormateursController();
$formateurs->formateursDisplay();