<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$forumAccueil = new \Frontoffice\Controller\ForumController();
$forumAccueil->forumDisplay();