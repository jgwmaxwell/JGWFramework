<?php if(!defined('DS')) exit('No direct script access allowed');

/** check for application environment
 *  and set error reporting accordingly
 */
 
  function setReporting()
  {
    if (DEVELOPMENT_ENVIRONMENT == true)
    {
      error_reporting(E_ALL);
      ini_set('display_errors', 'On');
    }
    else
    {
      error_reporting(E_ALL);
      ini_set('display_errors', 'Off');
      ini_set('log_errors', 'On');
      ini_set('error_log', ROOT . DS . 'tmp' . DS . 'logs' . DS . 'error.log');    
    }
  }

  /**
   * check for, and disable Magic Quotes GPC
   */
  
  function stripSlashesDeep($value)
  {
    $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
    return $value;
  }
  
  function removeMagicQuotes()
  {
    if( get_magic_quotes_gpc())
    {
      $_GET = stripSlashesDeep($_GET);
      $_POST = stripSlashesDeep($_POST);
      $_COOKIE = stripSlashesDeep($_COOKIE);
    }
  }
  
  
  /**
   * remove access to the global register
   */
 
  function unregisterGlobals()
  {
    if(ini_get('register_globals'))
    {
      $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
      foreach ($array as $value) :
          foreach ($GLOBALS[$value] as $key => $val) :
              if($var === $GLOBALS[$key]) :
                unset($GLOBALS[$key]);
              endif;
          endforeach;
      endforeach;
    }
  } 
  
  /**
   * Main application hook - this is where the magic happens!
   */
 


  
  
  /*
   * Autoload anything we need to make this happen
   */
 
  function __autoload($className)
  {
    if (file_exists(ROOT . DS . 'core' . DS . strtolower($className) . EXT))
    {
      require_once(ROOT . DS . 'core' . DS . strtolower($className) . EXT);
    }
    elseif (file_exists(ROOT . DS . 'library' . DS . strtolower($className) . '.class' . EXT))
    {
      require_once(ROOT . DS . 'library' . DS . strtolower($className) . '.class' . EXT);
    }
    elseif (file_exists(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . EXT))
    {
      require_once(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . EXT);
    }
    elseif (file_exists(ROOT . DS . 'application' . DS . 'models' . DS . strtolower($className) . EXT))
    {
      require_once(ROOT . DS . 'application' . DS . 'models' . DS . strtolower($className) . EXT);
    }
    else
    {
      // insert error code here
    }
  
  }
  
  
  setReporting();
  removeMagicQuotes();
  unregisterGlobals();
