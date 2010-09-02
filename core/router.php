<?php if(!defined('DS')) exit('No direct script access allowed');

/**
 * Welcome to the framework router. This file will process the input,
 * then work out what the main hook should be doing.
 */
 
 
 $urlArray = array();
 $urlArray = explode("/", $url);
 array_shift($urlArray);
 if(empty($urlArray[0]))
 {
   unset($urlArray);
   $urlArray = explode('/', $routes['default_route']);
 }
 
 
 
 
 function routeNow()
  {

    global $urlArray;

    $controller = $urlArray[0];
    array_shift($urlArray);

    $action = $urlArray[0];
    array_shift($urlArray);
    $queryString = $urlArray;
    
    $controllerName = $controller;
    $controller = ucwords($controller);
    $model = rtrim($controller, 's');
    $controller .= 'Controller';
    $dispatch = new $controller($model,$controllerName,$action);
    
    if((int) method_exists($controller, $action))
    {
      call_user_func_array(array($dispatch,$action),$queryString);
    }
    else
    {
      // insert error code here    
    }
  }

  routeNow();