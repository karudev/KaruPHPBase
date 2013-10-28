<?php 
require 'Config/Common.php';
require 'Library/Karudev/Route.php';


$route = new Route();

$controller = $route->getController().'Controller';
$action = $route->getAction().'Action';
require 'Controller/'.$controller.'.php';
$c = new $controller();
$c->$action();
 

?>
