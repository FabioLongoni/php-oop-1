<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800&family=Open+Sans:wght@300;400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Movies-OOP</title>
</head>
<?php
include __DIR__ .'/data.php';
?>
<body>
  <main class="main__content">
    <h1>movies</h1>
    <div class="movies__wrapper">
      <?php 
      foreach ($movies as $movie) {?>
        <div class="card__movie">
          <img src="<?= $movie->poster ?>" alt="">
          <div class="card__text">
            <h3><?= $movie->title ?></h3>
            <p><?= $movie->description ?></p>
            <span><strong>Genere: </strong> <?= $movie->genre ?></span><br>
            <span><strong>Anno: </strong> <?= $movie->year ?></span><br>
            <span><strong>Durata: </strong> <?= $movie->length ?> min</span>
          </div>
        </div>
      <?php    
      }     
      ?>
    </div> 
  </main>
  
</body>
</html>