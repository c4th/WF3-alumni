<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$newsDetail = new \Frontoffice\Controller\NewsController();
$newsDetail->newsDetailDisplay();