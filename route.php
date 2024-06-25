<?php

class Route{

  public $path;
  private $controller;
  private string $method;

  public function __construct($path, $method, $controller){
    $this->path = trim($path);
    $this->method = trim($method);
    $this->controller = $controller;
  } 

    public function Call(){
      return $this->controller;
    }

}