<?php if(!defined('DS')) exit('No direct script access allowed!');

class Input {
  
  private $post;
  private $get;
  
  function __construct()
  {
    
  }
  
  function post($item = null)
  {
    return $_POST[$item];
    echo "This is the post function";
  }
  
  
  
  
  
  
}
