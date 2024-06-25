
<?php

class BaseController { //This class is only static because you don't need new instance for use

  private static ResourceGroup $routerService;

  private static $found = false;
  private function __construct() {
  }

  public static function loadResource(ResourceGroup $resourceService) { //Load x resourse on the Controller base
    self::$routerService = $resourceService;
  }

  public static function index() {
    $routes =  self::$routerService->getReoutes();
    foreach ($routes as $route) {
      foreach($route as $s ) {
        if($s->path == $_SERVER['REQUEST_URI']){
          self::$found = true;
          $s->Call()();
        }
      }
    }

    if(!self::$found) { //If the resource not found display error 
      $routes =  self::$routerService->getErrorRoute();
      foreach ($routes as $route) {
        foreach($route as $s ) {
          if($_SERVER['REQUEST_URI'] != "/" ){
            self::$found = false;
            $s->Call()();
          }
        }
      }
    }
  }
 
}