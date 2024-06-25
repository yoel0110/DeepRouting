
<?php
require_once("DeepRouting/route.php");
require_once("DeepRouting/group.php");

class Router {
  public $groups = array(); 

  public function __construct() {}

  public function Group($name) {
    $this->groups[$name] = new ResourceGroup(trim($name));
    return $this->groups[$name];
  }

}