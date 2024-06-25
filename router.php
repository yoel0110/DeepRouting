
<?php
require_once("router/route.php");
require_once("router/group.php");

class Router {
  public $groups = array(); 

  public function __construct() {}

  public function Group($name) {
    $this->groups[$name] = new ResourceGroup(trim($name));
    return $this->groups[$name];
  }

}