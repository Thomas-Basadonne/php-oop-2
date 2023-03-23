<?php

class Cibo extends Prodotto
{
    public $scadenza;
    public $ingredienti;

    function __construct(
        string $_genere,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria,
        string $_scadenza,
        string $_ingredienti
    ) {
        parent::__construct($_genere, $_immagine, $_prezzo, $_categoria);
        $this->scadenza = $_scadenza;
        $this->ingredienti = $_ingredienti;
    }
}

$cibo_1 = new Cibo("Crocchette", "https://dariolagrario.it/218-large_default/natural-trainer-crocchette-per-cani-adulti-medium-al-pollo-kg12.jpg", 20, $categoria1, "2024-07-12", "Carne, Verdure, Legumi");
$cibo_2 = new Cibo("Crocchette", "https://www.carrefour.it/dw/image/v2/BDWP_PRD/on/demandware.static/-/Sites-carrefour-master-catalog-IT/default/dwfd43692a/large/CROCCGATTOMANZOFEGVERDCRF-8012666033720-1.png?sw=260&sh=260&sm=fit&sfrm=png", 15, $categoria2, "2024-07-12", "Pesce, Legumi");