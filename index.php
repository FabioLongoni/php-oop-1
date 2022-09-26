<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
include __DIR__ .'/data.php';
?>
<body>
  <div class="movies__wrapper">
    <div class="card__movie">
      <img src="<?php echo $firstMovie->poster ?>" alt="">
      <h3><?php echo $firstMovie->title ?></h3>
      <p><?php echo $firstMovie->description ?></p>
      <span><?php echo $firstMovie->genre ?></span>
      <span><?php echo $firstMovie->year ?></span>
    </div>
    <div class="card__movie">
      <img src="<?php echo $secondMovie->poster ?>" alt="">
      <h3><?php echo $secondMovie->title ?></h3>
      <p><?php echo $secondMovie->description ?></p>
      <span><?php echo $secondMovie->genre ?></span>
      <span><?php echo $secondMovie->year ?></span>
    </div>
  </div> 
</body>
</html>