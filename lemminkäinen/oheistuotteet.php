<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Portfolio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LEMMINKAINEN</title>
</head>
http://localhost/Lemmikkivuokraamo-frontend/lemmink%C3%A4inen/oheistuotteet.php

<body>
  <?php require '../php/modules/functions.php'?>
  <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../lemminkäinen/index.html">ETUSIVU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/eläimet.html">ELÄIMET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/PALAUTE.html">PALAUTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/oheistuotteet.html">OHEISTUOTTEET</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/kamppanja.html">KAMPPANJAT</a>
          </li>
      </ul>
  </header>

    <div class="container">
        <?php
          $products = getProducts();
          $animal = getAnimal();

          foreach($products as $p){
          echo "<div>".$p["tuote"]." ".$p["hinta"]."€"."</br>".$p["info"] . '</div>'. "</br>";
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