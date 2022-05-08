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
  <?php include TEMPLATES_DIR.'nav.php'; ?>

  <button href="index.php" class="vuokraussivulle">Vuokraussivulle</button>

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
                      <img id="korttikuva" src="../lemminkäinen/kuvat/kultainennoutaja.jpg">
                      <?php             
                      foreach($CARITA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Kukapa ei tykkäisi koirista ja vieläpä kultaisestanoutajasta! Tässä meidän 2-vuotias hellyyttävä Carita.

                    </p>
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
                    <img id="korttikuva" src="../lemminkäinen/kuvat/mayrakoira.jpg">
                      <?php             
                      foreach($BENJAMIN as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Pienempien koirien ystäville 3-vuotias Benjamin on oiva valinta!</p>
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
                    <img id="korttikuva" src="../lemminkäinen/kuvat/sfinx.jpg">

                      <?php             
                      foreach($JOHAN as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Jos et halua karvoja kotiisi, valitse Johan-kissa! Johan on 1-vuotias.</p>
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
                    <img id="korttikuva" src="../lemminkäinen/kuvat/ragdoll.jpg">

                      <?php             
                      foreach($LIISA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Liisa on 4-vuotias pitkäkarvainen laiskiainen (kissa).</p>
                  </div>
                
              </div>
          </div>

          <div class="container">
        <div class="row">
          <div class="col-4" class="header">
            <div class="elain m-4">
              <p>Linnut</p>
                <div class="cards">
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
                  <?php $LEILA = getLeila() ?>
                  <div class="card">
                    <h2><a href="#">
                      <img id="korttikuva" src="../lemminkäinen/kuvat/papukaija.jpg">
                      <?php             
                      foreach($LEILA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Jos kaipaat juttuseuraa, valitse Leila!

                    </p>
                  </div>


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
                  <?php $TOMMI = getTommi() ?>

                  <div class="card">
                    <h2><a href="#">
                    <img id="korttikuva" src="../lemminkäinen/kuvat/tirppa.jpg">
                      <?php             
                      foreach($TOMMI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Tommi on... Noh, Tommi-tirppa.</p>
                  </div>

                 

                </div>
            </div>

            <div class="elain m-4">
              <p>Lampaat ja vuohet</p>
              <div class="cards">
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
                  <?php $ESTERI = getEsteri() ?>

                  <div class="card">
                    <h2><a href="#">
                    <img id="korttikuva" src="../lemminkäinen/kuvat/suomenlammas.jpg">

                      <?php             
                      foreach($ESTERI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Esteri on komea suomenlammas!</p>
                  </div>

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
                  <?php $LUCIFER = getLucifer() ?>
                  <div class="card">
                    <h2><a href="#">
                    <img id="korttikuva" src="../lemminkäinen/kuvat/afrikanpikkuvuohi.jpg">

                      <?php             
                      foreach($LUCIFER as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Lucifer on pieni ja pippurinen vuohi. Varo ettei pökkää.</p>
                  </div>
                
              </div>
          </div>
            
          <div class="container">
        <div class="row">
          <div class="col-4" class="header">
            <div class="elain m-4">
              <p>Hevoset ja ponit</p>
                <div class="cards">
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
                  <?php $JONI = getJoni() ?>
                  <div class="card">
                    <h2><a href="#">
                      <img id="korttikuva" src="../lemminkäinen/kuvat/shetlanninponi1.jpg">
                      <?php             
                      foreach($JONI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Joni-poni on hauska kaveri viedä vaikka lenkille!

                    </p>
                  </div>


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
                  <?php $PERTTI = getPertti() ?>

                  <div class="card">
                    <h2><a href="#">
                    <img id="korttikuva" src="../lemminkäinen/kuvat/friisilainen.jpg">
                      <?php             
                      foreach($PERTTI as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Pertti on iso ja vahva. Ja musta.</p>
                  </div>

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
                  <?php $FREYA = getFreya() ?>

                  <div class="card">
                    <h2><a href="#">
                    <img id="korttikuva" src="../lemminkäinen/kuvat/suomenhevonen.jpg">
                      <?php             
                      foreach($FREYA as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Freya on nätti 7-vuotias suomenhevonen!</p>
                  </div>

                </div>
            </div>

            <div class="elain m-4">
              <p>Kilpikonnat</p>
              <div class="cards">
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
                  <?php $MARKO = getMarko() ?>

                  <div class="card">
                    <h2><a href="#">
                    <img id="korttikuva" src="../lemminkäinen/kuvat/nelivarvaskilpikonna.jpg">

                      <?php             
                      foreach($MARKO as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Marko on nimensä mukaisesti muikea. Se tuijottaa muikeasti.</p>
                  </div>

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
                  <?php $KALLE = getKalle() ?>
                  <div class="card">
                    <h2><a href="#">
                    <img id="korttikuva" src="../lemminkäinen/kuvat/punakorvakilpikonna.jpg">

                      <?php             
                      foreach($KALLE as $a){
                      echo "<div>" . "<h2>" . $a["tietoa"] . "</h2>" . '</div>'. "</br>";
                      } ?>
                      </a></h2>
                    <p>Kallella on punaiset korvat. Liekö paleltunut viimassa.</p>
                  </div>
                
              </div>
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