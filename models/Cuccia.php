<?php

class Cuccia extends Prodotto
{
    public $dimensioni;
    public $peso;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria,
        string $_dimensioni,
        int $_peso,
    ) {
        parent::__construct($_name, $_immagine, $_prezzo, $_categoria);
        $this->dimensioni = $_dimensioni;
        $this->peso = $_peso;
    }
}

$cuccia_1 = new Cuccia("Cuccia", "https://www.knuffelwuffel.it/media/image/product/4655/lg/knuffelwuff-lettino-per-cani-lotte-in-velluto-con-raffinato-effetto-tessuto-a-mano-xl-105-x-75-cm-grigio.jpg", 15, $categoria1, "80x60", 2);
$cuccia_2 = new Cuccia("Cuccia", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.it%2FBedsure-Cuccia-Gatto-Morbida-50x50cm%2Fdp%2FB08Q36NWLK&psig=AOvVaw3uJLh0EbLoEcNlAKj4mgVT&ust=1679682662931000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPjH79XX8v0CFQAAAAAdAAAAABAH", 20, $categoria2, "60x60", 1);