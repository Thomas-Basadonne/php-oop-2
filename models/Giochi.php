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

$gioco_2 = new Giochi("Pallina", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pacopetshop.it%2Fit%2Fgimdog%2F2772-palla-5-sensi-gioco-per-cani.htm&psig=AOvVaw1rJQkoLEG1gVL9OD9exGud&ust=1679682284535000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCOi_1qHW8v0CFQAAAAAdAAAAABAG", 4, $categoria1, "Dechatlon");
$gioco_1 = new Giochi("Tiragraffi", "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.habicat.it%2Fnegozio%2Ftiragraffi%2Fmodulo-palo-tiragraffi-arrampicata%2F&psig=AOvVaw2DiXwdYr6jZIMLdxAZaiPp&ust=1679682216566000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMC4pIHW8v0CFQAAAAAdAAAAABAK", 15, $categoria2, "Habicat");

