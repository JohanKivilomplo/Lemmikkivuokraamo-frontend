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
            <a class="nav-link active" href="../lemminkäinen/kamppanja.php">KAMPPANJAT</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/Ostoskori.php">VUOKRAUS</a>
        </li>
          <li class="nav-item">
            <a class="nav-link " href="../lemminkäinen/lisääKäyttäjä.php">LUO KÄYTTÄJÄTUNNUS</a>
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

<div class="container">
  <div class="row">
  <div class="col">
        <img src="" alt="">
        <h2>Vuokrattava eläin</h2>
        <p>info</p>
        <p>kampanja aika</p>
  </div>
  <div class="col">
        <img src="" alt="">
        <h2>Vuokrattava eläin</h2>
        <p>info</p>
        <p>kampanja aika</p>
  </div>
  <div class="col">
        <img src="" alt="">
        <h2>Vuokrattava eläin</h2>
        <p>info</p>
        <p>kampanja aika</p>
  </div>
  </div>
</div>

  <footer>
  </footer>
</body>
</html>