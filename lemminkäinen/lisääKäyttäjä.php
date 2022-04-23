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
  <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../lemminkäinen/index.html">ETUSIVU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/eläimet.html">ELÄIMET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/PALAUTE.html">PALAUTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/oheistuotteet.php">OHEISTUOTTEET</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/kamppanja.html">KAMPPANJAT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../lemminkäinen/lisääKäyttäjä.php">LISÄÄ KÄYTTÄJÄ</a>
          </li>
      </ul>
  </header>
  <?php

include '../php/modules/person.php';
?>

  <div class="container">
  <div class="row">
    <div class="col-3">
      
    </div>
    <div class="col">
    <form action="lisääKäyttäjä.php" method="post">
        <label for="fname">Etunimi:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Sukunimi:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <input type="submit" class="btn btn-primary" value="Lisää käyttäjä">
    </form>
    </div>
    </div>
    <div class="col-3">
      
    </div>
  </div>
</div>