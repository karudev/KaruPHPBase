<?php
require '/Library/Karudev/Db.php';

class Establishment extends Db{
    
   /* public function get(){
      return $this->getConnection()->query('select * from library')->fetchAll();
    }*/
    public function __construct() {
        $this->setTableName();
        $this->setColums();
    }
    public function fetchAll(){
        $sql="select * from ".$this->tableName." order by label desc";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function setTableName() {
        return $this->tableName ="establishment";
    }
    public function setColums() { 
        $colums = ['establishment_id','label','description','phone','postal_code','city','country'];
        $this->colums = $colums; 
    }

   

    
    
    
}
?>
