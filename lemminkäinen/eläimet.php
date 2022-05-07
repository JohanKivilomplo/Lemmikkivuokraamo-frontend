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
  <?php require '../php/modules/functions.php'?>
  <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">ETUSIVU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../lemminkäinen/eläimet.php">ELÄIMET</a>
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
            <a class="nav-link" href="../lemminkäinen/lisääKäyttäjä.php">LUO KÄYTTÄJÄTUNNUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/asiakkaat.php">ASIAKKAAT</a>
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
          <div class="col-4" class="header">
            <div class="elain m-4">
              <p>Koirat</p>
                <div class="cards">
                      <?php
                      function getCarita(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 1";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                  <?php $CARITA = getCarita() ?>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($CARITA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>


                      <?php
                      function getBenjamin(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 2";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                  <?php $BENJAMIN = getBenjamin() ?>

                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($BENJAMIN as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

                 

                </div>
            </div>

            <div class="elain m-4">
              <p>Kissat</p>
              <div class="cards">
                      <?php
                      function getJohan(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 3";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                  <?php $JOHAN = getJohan() ?>

                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($JOHAN as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

                      <?php
                      function getLiisa(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 4";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                  <?php $LIISA = getLiisa() ?>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($LIISA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                
              </div>
          </div>

            <div class="elain m-4">
              <p>Linnut</p>
              <div class="cards">
              <div class="card">
                    <p>
                      <?php
                      function getLeila(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 5";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $LEILA = getLeila() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($LEILA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

                  <div class="card">
                    <p>
                      <?php
                      function getTommi(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 6";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $TOMMI = getTommi() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($TOMMI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

              </div>
          </div>

            <div class="elain m-4">
              <p>Lampaat ja vuohet</p>
              <div class="cards">
              <div class="card">
                    <p>
                      <?php
                      function getEsteri(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 10";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $ESTERI = getEsteri() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($ESTERI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

                <div class="card">
                    <p>
                      <?php
                      function getLucifer(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 11";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $LUCIFER = getLucifer() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($LUCIFER as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

              </div>
          </div>

            

        <div class="elain m-4">
              <p>Hevoset ja ponit</p>
              <div class="cards">
                <div class="card">
                    <p>
                      <?php
                      function getJoni(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 7";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $JONI = getJoni() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($JONI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

                <div class="card">
                    <p>
                      <?php
                      function getPertti(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 8";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $PERTTI = getPertti() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($PERTTI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

                <div class="card">
                    <p>
                      <?php
                      function getFreya(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 9";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $FREYA = getFreya() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($FREYA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                
              </div>
          </div>

            <div class="elain m-4">
              <p>Kilpikonnat</p>
              <div class="cards">
              <div class="card">
                    <p>
                      <?php
                      function getMarko(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 12";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $MARKO = getMarko() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($MARKO as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>

                  <div class="card">
                    <p>
                      <?php
                      function getKalle(){
                        require_once '../php/modules/db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM ELAIN WHERE elainID = 13";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
                    </p>
                  <?php $KALLE = getKalle() ?>

                  </div>
                  <div class="card">
                    <h2><a href="#">
                      <?php             
                      foreach($KALLE as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  
                </div>
            </div>
          </div>
          </div>
        </div>
      </div>
  <footer>
    <div class="container">
      <div class="row">
        <p>
        Made by :  OAMK TIETOJENKÄSITTELY 5/2022
        </p>
      </div>
    </div>
  </footer>
</body>
</html>