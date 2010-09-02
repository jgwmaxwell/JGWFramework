<?php if(!defined('DS')) exit('No direct script access allowed');

class ActionsController extends Controller {
  
  function index()
  {
    $array = array(
      'name' => 'Falcon Framework',
      'description' => 'This is a fecking cool thing'
    );

    $this->Output->set('meta', $array);
    $this->Output->set('wombat', 'Hello World!');
    $this->Output->render();
  }  
  
  function next()
  {
    $array = array(
      'name' => 'Falcon Framework',
      'description' => 'This is the second page'
    );
    $this->Output->set('meta', $array);
    $this->Output->set('wombat', 'Hello World!');
    $this->Output->render();
  } 
  
  function last()
  {
    $array = array(
      'name' => 'Falcon Framework',
      'description' => 'This is the last page'
    );
    $this->Output->set('meta', $array);
    $this->Output->set('wombat', 'Hello World!');
    $this->Output->render();
  } 
}
