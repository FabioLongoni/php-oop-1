<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Movies-OOP</title>
</head>
<?php
include __DIR__ .'/data.php';
?>
<body>
  <main class="main__content">
    <div class="movies__wrapper">
      <div class="card__movie">
        <img src="<?php echo $firstMovie->poster ?>" alt="">
        <h3><?php echo $firstMovie->title ?></h3>
        <p><?php echo $firstMovie->description ?></p>
        <span><strong>Genere: </strong> <?php echo $firstMovie->genre ?></span><br>
        <span><strong>Anno: </strong> <?php echo $firstMovie->year ?></span><br>
        <span><strong>Durata: </strong> <?php echo $firstMovie->length ?></span>
      </div>
      <div class="card__movie">
        <img src="<?php echo $secondMovie->poster ?>" alt="">
        <h3><?php echo $secondMovie->title ?></h3>
        <p><?php echo $secondMovie->description ?></p>
        <span><strong>Genere: </strong> <?php echo $secondMovie->genre ?></span><br>
        <span><strong>Anno: </strong> <?php echo $secondMovie->year ?></span><br>
        <span><strong>Durata: </strong> <?php echo $secondMovie->length ?></span>
      </div>
      <div class="card__movie">
        <img src="<?php echo $thirdMovie->poster ?>" alt="">
        <h3><?php echo $thirdMovie->title ?></h3>
        <p><?php echo $thirdMovie->description ?></p>
        <span><strong>Genere: </strong> <?php echo $thirdMovie->genre ?></span><br>
        <span><strong>Anno: </strong> <?php echo $thirdMovie->year ?></span><br>
        <span><strong>Durata: </strong> <?php echo $thirdMovie->length ?></span>
      </div>
    </div> 
  </main>
  
</body>
</html>