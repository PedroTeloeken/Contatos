<?php

require("../Model/service.php");

$service = new Service();

$name = $_POST["name"];
$telefone = $_POST["telefone"];

if($name == "" || $name == null){
    echo "Valores não podem ser nulos";
} else if($telefone == "" || $telefone == null){
    echo "Valores não podem ser nulos";
}else{
    $service->registerContact($name , $telefone);
}

?>