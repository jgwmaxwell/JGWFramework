<?php if(!defined('DS')) exit('No direct script access!');

class Output {
  
  protected $variables = array();
  protected $_controller;
  protected $_action;
  
  function __construct($controller, $action)
  {
    $this->_controller = $controller;
    $this->_action = $action;
  }
  
  function set($key, $value)
  {
    $this->variables[$key] = $value; 
  }
  
  function render($view = null)
  {
    extract($this->variables);
    
    if(!$view)
    {
      $render = $this->_action;
    }
    else
    {
      $render = $view;    
    }
    
    if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $render . '.php'))
    {
      include(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $render . '.php');
    }
  }
  
  
  
  
  
  
  
  
  
}