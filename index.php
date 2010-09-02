<?php

  define('DS', DIRECTORY_SEPARATOR);

  define('ROOT', dirname(__FILE__));
  define('EXT', '.php');

  $url = $_SERVER['REQUEST_URI'];


  require_once(ROOT . DS . 'core' . DS . 'bootstrap' . EXT);

