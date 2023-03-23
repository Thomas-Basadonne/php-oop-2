<?php

class Cuccia extends Prodotto
{
    public $dimensioni;
    public $peso;

    function __construct(
        string $_genere,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria,
        string $_dimensioni,
        int $_peso,
    ) {
        parent::__construct($_genere, $_immagine, $_prezzo, $_categoria);
        $this->dimensioni = $_dimensioni;
        $this->peso = $_peso;
    }
}

$cuccia_1 = new Cuccia("Cuccia", "https://www.knuffelwuffel.it/media/image/product/4655/lg/knuffelwuff-lettino-per-cani-lotte-in-velluto-con-raffinato-effetto-tessuto-a-mano-xl-105-x-75-cm-grigio.jpg", 15, $categoria1, "80x60", 2);
$cuccia_2 = new Cuccia("Cuccia", "https://m.media-amazon.com/images/I/81dIZOQXLqL._AC_SX679_.jpg", 20, $categoria2, "60x60", 1);