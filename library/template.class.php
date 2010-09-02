<?php if(!defined('DS')) exit('No direct script access allowed');

class Template {
  
  protected $variables = array();
  protected $_controller;
  protected $_action;
  
  function __construct($controller,$action)
  {
    $this->_controller = $controller;
    $this->_action = $action;
  }
  
  function set($name, $value)
  {
    $this->variables[$name] = $value;
  }
  
  function render()
  {
    extract($this->variables);
    
    if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php'))
    {
      include(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php');
    }
  }
  
  
}
