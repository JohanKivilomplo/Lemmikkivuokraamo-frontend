<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LEMMINKAINEN</title>
</head>

<body>
<?php require MODULES_DIR.'functions.php'?>
<?php include TEMPLATES_DIR.'nav.php'; ?>


<div class="container">
<div class="row">

<div class="col card" id="CatCampaings">
    <?php
    $campaings = getCatCampaigns();
    $animal = getCat();

    foreach($animal as $a){
      echo "<div class='card-header'>" . "<h2 class='card-title' id='kissa'>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
      }
    foreach($campaings as $c){
    echo "<div class='list-group-item' id='kamppanjadiv'>" . "<p class='card-subtitle fw-bolder' id='kamppanjatxt'>" .$c["info"] . " ". "</p>". "</br>". "<p class='fw-normal' >Kamppanja alkaa ". "</p>" .$c["apvm"]. "</br>". "<p class='fw-normal' >Kamppanja loppuu ". "</p>" .$c["lpvm"]. '</div>'. "</br>";
    }
    ?>
</div>

<div class="col card" id="DogCampaings">
    <?php
    $campaings = getDogCampaigns();
    $animal = getDog();

    foreach($animal as $a){
      echo "<div class='card-header'>" . "<h2 class='card-title' id='koira'>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
      }
    foreach($campaings as $c){
    echo "<div class='list-group-item' id='kamppanjadiv'>" . "<p class='card-subtitle fw-bolder' id='kamppanjatxt'>" .$c["info"] . " ". "</p>". "</br>". "<p class='fw-normal' >Kamppanja alkaa ". "</p>" .$c["apvm"]. "</br>". "<p class='fw-normal' >Kamppanja loppuu ". "</p>" .$c["lpvm"]. '</div>'. "</br>";
    }
    ?>
</div>


<div class="col card" id="TurtleCampaings">
    <?php
    $campaings = getTurtleCampaigns();
    $animal = getTurtle();

    foreach($animal as $a){
      echo "<div class='card-header'>" . "<h2 class='card-title' id='kilpikonna'>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
      }
    foreach($campaings as $c){
    echo "<div class='list-group-item' id='kamppanjadiv'>" . "<p class='card-subtitle fw-bolder' id='kamppanjatxt'>" .$c["info"] . " ". "</p>". "</br>". "<p class='fw-normal' >Kamppanja alkaa ". "</p>" .$c["apvm"]. "</br>". "<p class='fw-normal' >Kamppanja loppuu ". "</p>" .$c["lpvm"]. '</div>'. "</br>";
    }
    ?>
</div>
</div>
<div class="row">
<div class="col card" id="BirdCampaings">
    <?php
    $campaings = getBirdCampaigns();
    $animal = getBird();

    foreach($animal as $a){
      echo "<div class='card-header'>" . "<h2 class='card-title' id='lintu'>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
      }
    foreach($campaings as $c){
    echo "<div class='list-group-item' id='kamppanjadiv'>" . "<p class='card-subtitle fw-bolder' id='kamppanjatxt'>" .$c["info"] . " ". "</p>". "</br>". "<p class='fw-normal' >Kamppanja alkaa ". "</p>" .$c["apvm"]. "</br>". "<p class='fw-normal' >Kamppanja loppuu ". "</p>" .$c["lpvm"]. '</div>'. "</br>";
    }
    ?>
</div>

<div class="col card" id="SheepCampaings">
    <?php
    $campaings = getSheepCampaigns();
    $animal = getSheep();

    foreach($animal as $a){
      echo "<div class='card-header'>" . "<h2 class='card-title' id='lammas'>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
      }
    foreach($campaings as $c){
    echo "<div class='list-group-item' id='kamppanjadiv'>" . "<p class='card-subtitle fw-bolder' id='kamppanjatxt'>" .$c["info"] . " ". "</p>". "</br>". "<p class='fw-normal' >Kamppanja alkaa ". "</p>" .$c["apvm"]. "</br>". "<p class='fw-normal' >Kamppanja loppuu ". "</p>" .$c["lpvm"]. '</div>'. "</br>";
    }
    ?>
</div>

<div class="col card" id="HorseCampaings">
    <?php
    $campaings = getHorseCampaigns();
    $animal = getHorse();

    foreach($animal as $a){
      echo "<div class='card-header'>" . "<h2 class='card-title' id='hevonen'>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
      }
    foreach($campaings as $c){
    echo "<div class='list-group-item' id='kamppanjadiv'>" . "<p class='card-subtitle fw-bolder' id='kamppanjatxt'>" .$c["info"] . " ". "</p>". "</br>". "<p class='fw-normal' >Kamppanja alkaa ". "</p>" .$c["apvm"]. "</br>". "<p class='fw-normal' >Kamppanja loppuu ". "</p>" .$c["lpvm"]. '</div>'. "</br>";
    }
    ?>
</div>


</div>
</div>

  <footer>
  </footer>
</body>
</html>