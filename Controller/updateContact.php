<?php
require("../Model/service.php");

$id = $_GET["id"];
$name = $_GET["name"];
$telefone = $_GET["telefone"];

$service = new Service();

$service->updateContact($id , $name , $telefone);


?>