<?php

require("../Model/service.php");
$service = new Service();

$id = (int)$_GET["id"];

if(!($id == "" || $id == null)){
    $service->deleteContact($id);
}

?>