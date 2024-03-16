<?php

// load controllers
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// parse_url is removing argument after /

$routes = [
  '/' => '../app/controllers/index.php',
  '/about' => '../app/controllers/about.php',
  '/contact' => '../app/controllers/contact.php',
];

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require_once $routes[$uri];
  } else {
    abort();
  }
}


function abort($port = 404)
{
  http_response_code(404);
  // echo 'Page not found';
  require_once  "views/{$port}.php";

  die();
}

routeToController($uri, $routes);
