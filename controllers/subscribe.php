<?php

require_once 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);


$heading = "<a href='/'><img src= /img/sg.png alt='Strange Garden'></a>";
$title = "Subscribe";




if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $errors = [];
//name validation`````
    if (preg_match('/[^A-Za-z0-9 ]/', $_POST['name']))
    {
        $errors['name'] = 'Name should not contain special characters';
    }

    if (strlen($_POST['name']) === 0)
    {
        $errors['name'] = 'Name should be at least 2 characters';
    }
    {
        $errors['name'] = 'Name cannot be empty';
    }


    if(empty($errors))
    {
        $db->query('INSERT INTO subscribers (name) VALUES ( :name)', [
            'name' => $_POST['name']
        ]);

    }

//email validation
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = 'You must enter a valid email';
    }

    if (strlen($_POST['email']) === 0)
    {
        $errors['email'] = 'Email cannot be empty';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO subscribers (email) VALUES ( :email)', [
            'email' => $_POST['email']
        ]);
    }
}

require 'views/subscribe.view.php';
