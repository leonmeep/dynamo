<?php

require 'functions.php';
require 'router.php';


$dsn = 'mysql:host=localhost;dbname=strange-garden-ml;user=root;port=3306;charset=utf8mb4';
new PDO($dsn);

$pdo = new PDO($dsn);

$statement = $pdo->prepare('SELECT * FROM subscribers');
$statement->execute();

$subscribers = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($subscribers as $subscriber) {
   echo "<li>{$subscriber['name']} - {$subscriber['email']}</li>";

}