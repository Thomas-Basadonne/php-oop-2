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

$cibo_1 = new Cibo("Crocchette", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fdariolagrario.it%2Fhome%2F62-natural-trainer-crocchette-per-cani-adulti-medium-al-pollo-kg12-8015699007003.html&psig=AOvVaw0hWoYV_fBjjLjpubEJU6VZ&ust=1679681917135000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCNjsxvLU8v0CFQAAAAAdAAAAABAG", 20, $categoria1, "2024-07-12", "Carne, Verdure, Legumi");
$cibo_2 = new Cibo("Crocchette", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fdariolagrario.it%2Fhome%2F62-natural-trainer-crocchette-per-cani-adulti-medium-al-pollo-kg12-8015699007003.html&psig=AOvVaw0hWoYV_fBjjLjpubEJU6VZ&ust=1679681917135000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCNjsxvLU8v0CFQAAAAAdAAAAABAG", 15, $categoria2, "2024-07-12", "Pesce, Legumi");