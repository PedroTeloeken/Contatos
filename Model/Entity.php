<?php

Class Entity{

    public $id;
    public $name;
    public $telefone;

    public function __construct($r)
    {
        $this->id = (int)$r["id"];
        $this->name = $r["name"];
        $this->email = $r["telefone"];
    }

}

?>