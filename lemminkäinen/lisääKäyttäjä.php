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
  <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">ETUSIVU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/eläimet.php">ELÄIMET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/PALAUTE.php">PALAUTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/oheistuotteet.php">OHEISTUOTTEET</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/kamppanja.php">KAMPPANJAT</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/Ostoskori.php">VUOKRAUS</a>
        </li>
          <li class="nav-item">
            <a class="nav-link active" href="../lemminkäinen/lisääKäyttäjä.php">LUO KÄYTTÄJÄTUNNUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../lemminkäinen/asiakkaat.php">ASIAKKAAT</a>
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
  <?php

include MODULES_DIR.'person.php';
?>

  <div class="container">
  <div class="row">
    <div class="col-3">
      
    </div>
    <div class="col">
      
  <?php
    $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
    $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $puhnro = filter_input(INPUT_POST, "puhnro", FILTER_SANITIZE_NUMBER_INT);
    $osoite = filter_input(INPUT_POST, "osoite", FILTER_SANITIZE_SPECIAL_CHARS);
    $postinro = filter_input(INPUT_POST, "postinro", FILTER_SANITIZE_NUMBER_INT);
    $postitmp = filter_input(INPUT_POST, "postitmp", FILTER_SANITIZE_SPECIAL_CHARS);
    $uname = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $pw = filter_input(INPUT_POST, "pw", FILTER_SANITIZE_SPECIAL_CHARS);
    
      if(isset($fname)){
          try{
              addPerson($fname, $lname, $email, $puhnro, $osoite, $postinro, $postitmp, $uname, $pw);
              echo '<div class="alert alert-success" role="alert">Person added!!</div>';
          }catch(Exception $e){
              echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
          }
          
      }
    ?>

    <form action="lisääKäyttäjä.php" method="post">
        <label for="fname">Etunimi:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Sukunimi:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label for="email">Sähköposti:</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="puhnro">Puhelinnumero:</label><br>
        <input type="text" name="puhnro" id="puhnro"><br>
        <label for="osoite">Katuosoite:</label><br>
        <input type="text" name="osoite" id="osoite"><br>
        <label for="postinro">Postinumero:</label><br>
        <input type="text" name="postinro" id="postinro"><br>
        <label for="postitmp">Postitoimipaikka:</label><br>
        <input type="text" name="postitmp" id="postitmp"><br>
        <label for="username">Käyttäjänimi:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="pw">Salasana:</label><br>
        <input type="password" name="pw" id="pw"><br>
        <input type="submit" class="btn btn-primary" value="Lisää käyttäjä">
    </form>
    </div>
    </div>
    <div class="col-3">
    </div>
  </div>
</div>
</body>