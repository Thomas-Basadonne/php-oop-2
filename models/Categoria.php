<?php
class Categoria{
    public $genere;

    function __construct(
        string $_genere
    ){
        $this->genere=$_genere;
    }
}

$categoria1= new Categoria("cane");
$categoria2= new Categoria("gatto");

// var_dump($categoria1);