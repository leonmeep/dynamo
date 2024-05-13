<?php

$db = connectToDb();

$query = $db->prepare('SELECT * FROM `subcribers`');
$query->execute();

$results = $query->fetchAll();


//$config = require 'config.php';
//$db = new Database($config['database']);


$heading = "<img src='/img/sg.png' alt='Strange Garden'>";
$title = "Subscribe";

//$subscribers = $db->query('SELECT * FROM subscribers')->fetchAll();



require 'views/subscribe.view.php';
