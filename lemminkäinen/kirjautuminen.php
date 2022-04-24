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
            <a class="nav-link" href="../lemminkäinen/lisääKäyttäjä.php">LUO KÄYTTÄJÄTUNNUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../lemminkäinen/kirjautuminen.php">KIRJAUDU SISÄÄN</a>
          </li>
          <li class="nav-item">
            <?php 
                if(isset($_SESSION["username"])){
                    echo '<a class="nav-link bg-danger" href="logout.php">Log out</a>';
                }else{
                    echo '<a class="nav-link bg-success" href="login.php">Log in</a>';
                }
            ?>
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
    <?php
      include '../php/modules/authorization.php';

      $fname = filter_input(INPUT_POST, "username");
      $pw = filter_input(INPUT_POST, "password");

      if(!isset($_SESSION["username"]) && isset($uname)){

          try {
              login($uname, $pw);
              header("Location: ../index.php");
              exit;
          } catch (Exception $e) {
              echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
          }
        
      }

          if(!isset($_SESSION["usename"])){
      ?>

          <form action="lisääKäyttäjä.php" method="post">
              <label for="username">Käyttäjänimi:</label><br>
              <input type="text" name="username" id="username"><br>
              <label for="password">Salasana:</label><br>
              <input type="password" name="password" id="password"><br>
              <input type="submit" class="btn btn-primary" value="Log in">
          </form>


    <?php } ?>
    </div>
    </div>
    <div class="col-3">
    </div>
  </div>
</div>
</body>
