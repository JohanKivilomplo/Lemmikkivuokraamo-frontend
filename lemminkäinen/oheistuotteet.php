<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="oheistuotteet.css">    

    <title>LEMMINKAINEN</title>
</head>
http://localhost/Lemmikkivuokraamo-frontend/lemmink%C3%A4inen/oheistuotteet.php

<body>
  <?php require '../php/modules/functions.php'?>
  <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../lemminkäinen/index.php">ETUSIVU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/eläimet.php">ELÄIMET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/PALAUTE.php">PALAUTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../lemminkäinen/oheistuotteet.php">OHEISTUOTTEET</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/kamppanja.php">KAMPPANJAT</a>
          </li>
      </ul>
  </header>
      <div class="dogs">
        <?php
          $products = getDogProducts();
          $animal = getDog();

          foreach($animal as $a){
            echo "<div>" . "<h2>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
            }
          foreach($products as $p){
          echo "<div>".$p["tuote"]." ".$p["hinta"]."€"."</br>".$p["info"] . " " .'<button>Osta</button>' . '</div>' . "</br>";
          }
        ?>
      </div>

      <div class="cats">
        <?php
          $products = getCatProducts();
          $animal = getCat();

          foreach($animal as $a){
            echo "<div>" . "<h2>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
            }
          foreach($products as $p){
          echo "<div>".$p["tuote"]." ".$p["hinta"]."€"."</br>".$p["info"] . " " .'<button>Osta</button>' . '</div>'. "</br>";
          }
        ?>
      </div>
      
      <div class="turtles">
        <?php
          $products = getTurtleProducts();
          $animal = getTurtle();

          foreach($animal as $a){
            echo "<div>" . "<h2>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
            }
          foreach($products as $p){
          echo "<div>".$p["tuote"]." ".$p["hinta"]."€"."</br>".$p["info"] . " " .'<button>Osta</button>' . '</div>'. "</br>";
          }
        ?>
      </div>

      <div class="birds">
        <?php
          $products = getBirdProducts();
          $animal = getBird();

          foreach($animal as $a){
            echo "<div>" . "<h2>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
            }
          foreach($products as $p){
          echo "<div>".$p["tuote"]." ".$p["hinta"]."€"."</br>".$p["info"] . " " .'<button>Osta</button>' . '</div>'. "</br>";
          }
        ?>
      </div>

      <div class="sheeps">
        <?php
          $products = getSheepProducts();
          $animal = getSheep();

          foreach($animal as $a){
            echo "<div>" . "<h2>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
            }
          foreach($products as $p){
          echo "<div>".$p["tuote"]." ".$p["hinta"]."€"."</br>".$p["info"] . " " .'<button>Osta</button>' . '</div>' . "</br>";
          }
        ?>
      </div>

      <div class="horses">
        <?php
          $products = getHorseProducts();
          $animal = getHorse();

          foreach($animal as $a){
            echo "<div>" . "<h2>" . $a["lajinimi"] . "</h2>" . '</div>'. "</br>";
            }
          foreach($products as $p){
          echo "<div>".$p["tuote"]." ".$p["hinta"]."€"."</br>".$p["info"] . " " .'<button>Osta</button>' . '</div>'. "</br>";
          }
        ?>
      </div>


  <footer>
    <div class="container">
      <div class="row">

      </div>
    </div>
  </footer>
</body>
</html>