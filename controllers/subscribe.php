<?php

require_once 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);


$heading = "<img src='/img/sg.png' alt='Strange Garden'>";
$title = "Subscribe";




if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (strlen($_POST['name']) < 1) {
        $errors['name'] = 'You must enter a name';
        $errors['email'] = 'You must enter a valid email';
    }
    if (empty($errors)) {
        $db->query('INSERT INTO subscribers (name, email) VALUES (:name, :email)', [
            'name' => $_POST['name'],
            'email' => $_POST['email']
        ]);
    }
}

require 'views/subscribe.view.php';
