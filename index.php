<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes =
[
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/subscribe' => 'controllers/subscribe.php',
];

function abort() {
    http_response_code(404);

    require 'controllers/404.php';

    die();

}

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort();
}


