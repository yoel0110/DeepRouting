<?php

class Route{

  public $path;
  private $controller;

  private $method;

  private $params = array();

  public function __construct($path, $controller){
    $this->path = trim($path);
    $this->controller = $controller;
  } 

    public function Call(){
      return $this->controller;
    }

}