<?php

require("DataBase.php");
require("Entity.php");

class Service{

private $db;

public function __construct(){
    $this->db = new DataBase();
}

public function registerContact($name , $telefone){
    $this->db->execute("INSERT INTO contacts (name , telefone) VALUES ('$name','$telefone')");
}

public function deleteContact($id){
    $this->db->execute("DELETE FROM contacts WHERE id =$id");
}

public function updateContact($id, $name , $telefone){
    $this->db->execute("UPDATE contacts SET name ='$name', telefone ='$telefone' WHERE id = $id");
}



public function allContacts(){
    $results = $this->db->execute("SELECT id, name , telefone FROM contacts");
    print_r($results);
    $list = [];
        foreach($results as $r){
            $list[] = new Entity($r);
        }
        return $list;
}


}

?>