<?php
require_once __DIR__ . '../../app/functions/bootstrap.php';

// load controllers
$uri = $_SERVER['REQUEST_URI'];
if ($uri === '/') {
  require_once __DIR__ . '../../app/controllers/index.php';
} else if ($uri === '/about') {
  require_once __DIR__ . '../../app/controllers/about.php';
} else {
  require_once __DIR__ . '../../app/controllers/contact.php';
}
