<?php

require("DataBase.php");

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



}

?>