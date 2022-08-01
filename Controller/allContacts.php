<?php
require("../Model/service.php");

$service = new Service();

$contacts = $service->allContacts();

foreach($contacts as $r){
    echo $r["id"] . $r["name"] . $r["telefone"];
}


?>