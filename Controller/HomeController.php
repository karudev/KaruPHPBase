<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author RENAULT
 */
require 'Library/Karudev/View.php';
require 'Model/Establishment.php';

class HomeController {
    //put your code here
    public function indexAction(){
       $establishment =  new Establishment();
       $data =  $establishment->fetchAll();
      
      return (new View())->render('Home/index.php',['establishments' => $data]);
    }
}

?>
