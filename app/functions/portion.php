<?php
define('PORTION', '../public/assets/portion/');
define('ROOT', '../../../');
function base_path($path)
{
  return  PORTION . $path;
}
function path($component)
{
  $filePath = base_path("{$component}.php");
  // Adjust if path necessary
  if (file_exists($filePath)) {
    require_once $filePath;
  } else {
    // Handle missing component gracefully
    echo "Error: Failed to load component: $component";
  }
}

function root($path)
{
  require_once ROOT . $path;
}
