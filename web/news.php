<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$news = new \Frontoffice\Controller\NewsController();
$news->newsDisplay();