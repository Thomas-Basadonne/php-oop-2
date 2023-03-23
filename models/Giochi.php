<?php

class Giochi extends Prodotto
{
    public $colore;
    public $marca;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria,
        string $_marca,
    ) {
        parent::__construct($_name, $_immagine, $_prezzo, $_categoria);
        $this->marca = $_marca;
    }
}

$gioco_1 = new Giochi("Tiragraffi", "https://www.habicat.it/wp-content/uploads/2019/02/habicat-modulo-palo-arrampicata-gatto.jpg", 15, $categoria2, "Habicat");
$gioco_2 = new Giochi("Pallina", "https://www.pacopetshop.it/3500-large_default/palla-5-sensi-gioco-per-cani.jpg", 4, $categoria1, "Dechatlon");

