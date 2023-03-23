<?php

class Prodotto{
    public $genere;
    public $immagine;
    public $prezzo;
    public $categoria;

    function __construct(
        string $_genere,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria
    ) {
        $this->genere = $_genere;
        $this->immagine = $_immagine;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    } 
}