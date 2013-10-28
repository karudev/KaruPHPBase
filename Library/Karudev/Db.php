<?php
require 'Config/Connexion.php';
abstract Class Db{

    protected $colums = [];
    protected $tableName ;
    
   
    protected function getConnection() {
       $dns = "mysql:host=".HOST.";dbname=".DATABASE_NAME;

        try {
            // connexion à la base Oracle et création de l'objet
            return new \PDO($dns,USERNAME,PASSWORD);
        } catch (PDOException $erreur) {
            echo $erreur->getMessage();
        }
    } 
    
    protected function getColums(){
       return $this->colums;
    }
    public function insert($data){
        foreach ($data as $key =>  $value) {
            
            if(in_array($key,$this->colums))
            $col[] = $key;

            $val[] = '"'.$value.'"';
        }
        $selectColums = implode(',',$col);
        
        $sql ="insert into ".$this->tableName." (".$selectColums.") values (".implode(',',$val).")";
     
        $stmt = $this->getConnection()->prepare($sql);
        return $stmt->execute(); 

    
        //die($sql);
    }
    public function delete($id){
        $cols = $this->getColums();
        $sql="delete from ".$this->tableName." where ".$cols[0]."=".$id;
      
        $stmt = $this->getConnection()->prepare($sql);
        return $stmt->execute();
    }
    abstract public function setTableName();
    abstract public function setColums();
   
    

}


?>
