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

<?php require '../php/modules/functions.php'?>

  <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">ETUSIVU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/eläimet.php">ELÄIMET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../lemminkäinen/PALAUTE.php">PALAUTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/oheistuotteet.php">OHEISTUOTTEET</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/kamppanja.php">KAMPPANJAT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/lisääKäyttäjä.php">LUO KÄYTTÄJÄTUNNUS</a>
          </li>
          <li class="nav-item">
            <?php 
                if(isset($_SESSION["username"])){
                    echo '<a class="nav-link bg-danger" href="../lemminkäinen/uloskirjautuminen.php">Log out</a>';
                }else{
                    echo '<a class="nav-link bg-success" href="../lemminkäinen/kirjautuminen.php">Log in</a>';
                }
            ?>
            </li>
      </ul>
  </header>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <div class="h3">
        Anna meille palautetta!
        </div>
        <form action="PALAUTE.php" method="post">
          <div class="form-group">
            <label for="etunimi">Etunimi</label>
            <input type="text" class="form-control" name="etunimi" id="etunimi" placeholder="Etunimi">
          </div>
          <div class="form-group">
            <label for="sukunimi">Sukunimi</label>
            <input type="text" class="form-control" name="sukunimi" id="sukunimi" placeholder="Sukunimi">
          </div>
          <div class="form-group">
            <label for="email">Sähköposti</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Syötä sähköpostiosoitteesi">
          </div>
          <div class="form-group">
            <label for="phone">Puhelinnumero</label>
            <input type="tel" class="form-control" name="phonenumber" id="phonenumber" placeholder="Puhelinnumero">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Palaute</label>
            <textarea class="form-control" name="palautelaatikko" id="palautelaatikko" rows="3" placeholder="Anna meille palautetta..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary m-2">Lähetä</button>
        </form>
      </div>
    </div>
  </div>

  <?php

    $palautenro = "";
    $etunimi = filter_input(INPUT_POST, "etunimi");
    $sukunimi = filter_input(INPUT_POST, "sukunimi");
    $sahkoposti = filter_input(INPUT_POST, "email");
    $puhelinnro = filter_input(INPUT_POST, "phonenumber");
    $palaute = filter_input(INPUT_POST, "palautelaatikko");
        
    if(isset($etunimi)){
        addFeedback($palautenro, $etunimi, $sukunimi, $sahkoposti, $puhelinnro, $palaute);
        echo '<div class="alert alert-success" role="alert">Palaute lisätty!!</div>';
    }

    $selectedID = isset($etunimi) ? $etunimi : 0;
?>

  <footer>
    <div class="container">
      <div class="row">
        <p>
        Made by :  OAMK TIETOJENKÄSITTELY 12/2021 
        </p>
      </div>
    </div>
  </footer>
</body>
</html>