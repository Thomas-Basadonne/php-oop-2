<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
<?php
include_once "./models/Categoria.php";
include_once "./models/Prodotto.php";
include_once "./models/Cibo.php";
include_once "./models/Giochi.php";
include_once "./models/Cuccia.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center fs-2 fw-900 my-5">E-commerce Pet</h1>
    <div class="container">
    <div class="card-group">

  <div class="card">
    <img src="<?= $cuccia_1->immagine ?>" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$cuccia_1->genere?></h5>
      <p class="card-text"><?= $cuccia_1->categoria->genere ?></p>
      <p class="card-text"><?=$cuccia_1->prezzo?>$</p>
      <p class="card-text"><?=$cuccia_1->dimensioni?>cm</p>
      <p class="card-text"><?=$cuccia_1->peso?>kg</p>
    </div>
  </div>

  <div class="card">
    <img src="<?= $cuccia_2->immagine ?>" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$cuccia_2->genere?></h5>
      <p class="card-text"><?= $cuccia_2->categoria->genere ?></p>
      <p class="card-text"><?=$cuccia_2->prezzo?>$</p>
      <p class="card-text"><?=$cuccia_2->dimensioni?>cm</p>
      <p class="card-text"><?=$cuccia_2->peso?>kg</p>
    </div>
  </div>

  <div class="card">
    <img src="<?= $cibo_1->immagine ?>" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$cibo_1->genere?></h5>
      <p class="card-text"><?= $cibo_1->categoria->genere ?></p>
      <p class="card-text"><?=$cibo_1->prezzo?>$</p>
      <p class="card-text"><?=$cibo_1->scadenza?>cm</p>
      <p class="card-text"><?=$cibo_1->ingredienti?>kg</p>
    </div>
  </div>

  <div class="card">
    <img src="<?= $cibo_2->immagine ?>" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$cibo_2->genere?></h5>
      <p class="card-text"><?= $cibo_2->categoria->genere ?></p>
      <p class="card-text"><?=$cibo_2->prezzo?>$</p>
      <p class="card-text"><?=$cibo_2->scadenza?></p>
      <p class="card-text"><?=$cibo_2->ingredienti?></p>
    </div>
  </div>
  
  <div class="card">
    <img src="<?= $gioco_1->immagine ?>" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$gioco_1->genere?></h5>
      <p class="card-text"><?= $gioco_1->categoria->genere ?></p>
      <p class="card-text"><?=$gioco_1->prezzo?>$</p>
      <p class="card-text"><?=$gioco_1->marca?></p>
      
    </div>
  </div>

  <div class="card">
    <img src="<?= $gioco_2->immagine ?>" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$gioco_2->genere?></h5>
      <p class="card-text"><?= $gioco_2->categoria->genere ?></p>
      <p class="card-text"><?=$gioco_2->prezzo?>$</p>
      <p class="card-text"><?=$gioco_2->marca?></p>
    </div>
  </div>
</div>
    </div>
</body>
</html>