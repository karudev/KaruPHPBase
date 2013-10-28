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

class EstablishmentController {

    //put your code here
    public function addEditAction() {

        if ((!empty($_POST) && isset($_POST['establishment']))) {
            $establishment = new Establishment();
            foreach ($_POST['establishment'] as $key => $value) {
                $_POST['establishment'][$key] = filter_var($value, FILTER_SANITIZE_STRING);
            }
            //  print_r($_POST);die();
            $establishment->insert($_POST['establishment']);
        } else {

            // $data =  $establishment->fetchAll();
        }
        return (new View(false))->render('Establishment/addEdit.php');
    }

    public function delAction() {
     
        $id = (int) $_GET['id'];
        $establishment = new Establishment();
        $retour = $establishment->delete($id);
        die(json_encode(['response' => $retour]));
    }
    public function showAllAction(){
       
       $establishment = new Establishment();
       $data = $establishment->fetchAll();
       
       return (new View(false))->render('Establishment/showAll.php',['establishments' => $data]); 
    }

}

?>
