<?php

class Mysql_categoria{
    private $db;                
    public function __construct($db){
        $this->db=$db;        
    }
    public function getAll(){
        $query="SELECT * FROM users";        
        $this->db->execQuery($query);
        return $this->db->getAllRows();
    }

    public function insert($nombre){
        $query="INSERT INTO categoria ".
                "(nombre) values ".
               "('{$nombre}')" ; 
        return $this->db->execQuery($query);
    }
   
    public function deleteById($id){
        $query="DELETE FROM categoria WHERE id={$id}";                
        return $this->db->execQuery($query);
    }

    public function updateById($id,$nombre){
        $query="UPDATE categoria ".
               "SET nombre='{$nombre}'". 
               "WHERE id={$id}";
        return $this->db->execQuery($query);
    }
}
?>