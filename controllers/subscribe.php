<?php

require_once 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);


$heading = "<img src='/img/sg.png' alt='Strange Garden'>";
$title = "Subscribe";




if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $errors = [];
//name validation
    if (preg_match('/[^A-Za-z0-9 ]/', $_POST['name']))
    {
        $errors['name'] = 'Name should not contain special characters';
    }

    if (strlen($_POST['name']) > 30  || strlen($_POST['name']) < 1) {
        $errors['name'] = 'The name must be at least character and not longer than 30 characters';
    }

    if(empty($errors))
    {
        $db->query('SELECT * FROM subscribers WHERE name = :name', [
            'name' => $_POST['name']
        ]);

    }

//email validation
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = 'You must enter a valid email';
    }

    if (strlen($_POST['email']) > 50 )
    {
        $errors['email'] = 'The email cannot be longer than 50 characters';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO subscribers (name, email) VALUES ( :email)', [
            'email' => $_POST['email']
        ]);
    }
}

require 'views/subscribe.view.php';
