<?php
require_once(__DIR__ . '/../vendor/Autoload.php');

$forumSujet = new \Frontoffice\Controller\ForumController();
$forumSujet->forumSujetsDisplay();