<?php

function dd($value)
{

   echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


function connectToDb() : PDO
{
    $db = new PDO('mysql:host=db; dbname=subscribers', 'root', '');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;

}

