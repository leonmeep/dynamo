<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'controllers/index.php';
} elseif ($uri === '/about') {
    require 'controllers/about.php';
} elseif ($uri === '/contact') {
    require 'controllers/subscribe.php';
} else {
    require 'controllers/404.php';
}