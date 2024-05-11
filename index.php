<?php

require 'functions.php';
require 'router.php';
require 'Database.php';



$db = new Database();

$subscribers = $db->query('SELECT * FROM subscribers')->fetchAll(PDO::FETCH_ASSOC);

dd($subscribers);