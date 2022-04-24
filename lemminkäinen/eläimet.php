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
          <a class="nav-link active" aria-current="page" href="index.php">ETUSIVU</a>
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
      </ul>
  </header>

    <div class="container">
        <div class="row">
          <div class="col-4" class="header">
            <div class="elain m-4">
              <p>Koirat</p>
                <div class="cards">
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>
                      <?php
                      function getDog(){
                        require_once 'db.php';

                        try{
                            $pdo = openDb();
                            // Create SQL query to get all rows from a table
                            $sql = "SELECT * FROM LAJI WHERE lajinro = 1";
                            // Execute the query
                            $people = $pdo->query($sql);

                            return $people->fetchAll();
                        }catch(PDOException $e){
                            throw $e;
                        }
                    }
                    ?>
</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                </div>
            </div>

            <div class="elain m-4">
              <p>Kissat</p>
              <div class="cards">
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
              </div>
          </div>

            <div class="elain m-4">
              <p>Linnut</p>
              <div class="cards">
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
              </div>
          </div>

            <div class="elain m-4">
              <p>Lampaat ja vuohet</p>
              <div class="cards">
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
              </div>
          </div>

            

        <div class="elain m-4">
              <p>Hevoset ja ponit</p>
              <div class="cards">
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
                <div class="card">
                  <h2><a href="#">Title</a></h2>
                  <p>Some article description stuff.</p>
                </div>
              </div>
          </div>

            <div class="elain m-4">
              <p>Kilpikonnat</p>
              <div class="cards">
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
                    <p>Some article description stuff.</p>
                  </div>
                  <div class="card">
                    <h2><a href="#">Title</a></h2>
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
        Made by :  OAMK TIETOJENKÄSITTELY 12/2021 
        </p>
      </div>
    </div>
  </footer>
</body>
</html>