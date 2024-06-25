<?php

class ResourceGroup {
  public $name;
  private $resourcePath;
  private $errorRoute;
  private $routes = array();
  
  public function __construct($name) {
    $this->name = $name;
    if ($name == ""){
      $this->resourcePath = "/";
      return;
    }
    $this->resourcePath = "/".$name."";
  }

  public function Post($path, $handler) {
    $this->routes[$this->name][$path] = new Route($this->resourcePath."".$path, "POST", $handler);
  }

  public function Get($path, $handler) {
    $this->routes[$this->name][$path] = new Route($this->resourcePath."".$path, "GET", $handler);
  }

  public function Put($path, $handler) {
    $this->routes[$this->name][$path] = new Route($this->resourcePath."".$path, "PUT", $handler);
  }

  public function Delete($path, $handler) {
    $this->routes[$this->name][$path] = new Route($this->resourcePath."".$path, "DELETE", $handler);
  }

  public function NotFound($path, $handler) {
    $this->errorRoute[$this->name][$path] = new Route($this->resourcePath."".$path, "", $handler);
  }

  //Utils
  public function getReoutes(){
    return $this->routes;
  }

  public function getErrorRoute(){
    return $this->errorRoute;
  }
}