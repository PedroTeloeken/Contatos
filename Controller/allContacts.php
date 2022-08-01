<?php
require("../Model/service.php");

$service = new Service();

$contacts = $service->allContacts();

foreach($contacts as $r){
    echo $r["id"] . $r["name"] . $r["telefone"];
}

print_r($contacts);

$result = $service->teste();

while($row = $result->fetch_assoc()){
    $arrContatos = [
        "id" => $row["id"],
        "name" => $row["name"],
        "telefome" => $row["telefone"]
    ];
}

print_r($result);

?>