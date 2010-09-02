<?php if(!defined('DS')) exit('No direct script access');

class Loader {
  
  protected $variable;
  
  function __construct()
  {
  // put the initial constructory kind of stuff in here  
  }
  
  
  /*
   * OK so we need a way to load in some libraries!
   */
  
  function library($library = null)
  {
    if(!$library)
    {
      return FALSE;
    }
    else
    {
      if(file_exists(ROOT . DS . 'library' . DS . $library . '.class' . EXT))
      {
        $library = ucfirst($library);
        return $this->{$library} = new $library;
      }
      else
      {
        return FALSE;
      }
    }
  }
  
  
}
