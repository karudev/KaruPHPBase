<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author RENAULT
 */
class Route {

    private $controller;
    private $action;

    public function __construct() {

       
        $this->controller = ucfirst($_GET['controller']);
        $this->action = $_GET['action'];
        
    }
    public function getAction(){
        return $this->action;
    }
    public function getController(){
        return $this->controller;
    }

}

?>
