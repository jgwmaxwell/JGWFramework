<?php if(!defined('DS')) exit('No direct script access allowed');

/*
 * Here lies the configuration stuff
 */
 
 define('DEVELOPMENT_ENVIRONMENT', true);
 define('DB_NAME', 'yourdatabasename');
 define('DB_USER', 'yourusername');
 define('DB_PASSWORD', 'yourpassword');
 define('DB_HOST', 'localhost');

 
 
 
 
 
 /*
  * load additional routes
  */
  //routes
  include_once(ROOT . DS . 'config' . DS . 'routes' . EXT); 