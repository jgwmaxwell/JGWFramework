<?php if(!defined('DS')) exit('No direct script access allowed');

class Controller {
  
  protected $_model;
  protected $_controller;
  protected $_action;
  protected $_template;
  
  function __construct($model, $controller, $action)
  {
    $this->_controller = $controller;
    $this->_action = $action;
    $this->_model = $model;
    
    $this->$model = new $model;
    $this->Output = new Output($controller, $action);
    $this->load = new Loader();
  }
  
  
  function set($name,$value)
  {
    //$this->_template->set($name,$value);
  }
  
  function __destruct()
  {
    //$this->_template->render();
  }
  

}
