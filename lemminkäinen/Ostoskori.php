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

  
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <div >
        <h3>Vuokrauskysely</h3>
        </div>
        <div style = "position:relative; left:-40%; top:2px;">
          <img id="ostoskoriImg" src="..\lemminkäinen\kuvat\goats-1993649_960_720.jpg" >
        </div>
        <form action="Ostoskori.php" method="post">
          <div class="form-group">
            <label for="etunimi">Etunimi</label>
            <input type="text" class="form-control" name="etunimi" id="etunimi" placeholder="Etunimi">
          </div>
          <div class="form-group">
            <label for="sukunimi">Sukunimi</label>
            <input type="text" class="form-control" name="sukunimi" id="sukunimi" placeholder="Sukunimi">
          </div>
          <div class="form-group">
            <label for="apvm">Aloituspäivämäärä</label>
            <input type="apmv" class="form-control" name="apvm" id="apvm" placeholder="YYYY/MM/DD">
          </div>
          <div class="form-group">
            <label for="lpvm">Lopetuspäivämäärä</label>
            <input type="lpvm" class="form-control" name="lpvm" id="lpvm" placeholder="YYYY/MM/DD">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Lisätietoa</label>
            <textarea class="form-control" name="lisatietoa" id="lisatietoa" rows="3" placeholder="Minkälaisesta tapahtumasta on kyse? Toivotteko jotain tiettyä yksilöä?"></textarea>
          </div>

        
          
          <input type='radio' name='lajinro' value="1" /> KOIRA
          <input type='radio' name='lajinro' value="2" /> KISSA
          <input type='radio' name='lajinro' value="3" />  KILPIKONNA
          <input type='radio' name='lajinro' value="4" />  LINTU <br>
          <input type='radio' name='lajinro' value="5" />  LAMMAS/VUOHI
          <input type='radio' name='lajinro' value="6" />  HEVONEN/PONI
          <br>
          <button type="submit" class="btn btn-primary m-2" name="send" value="send">Lähetä</button>
        </form>
      </div>
    </div>
  </div>



<?php



    $vuokrausnro = "";  
    $etunimi = filter_input(INPUT_POST, "etunimi");
    $sukunimi = filter_input(INPUT_POST, "sukunimi");
    $apvm =filter_input(INPUT_POST, "apvm");
    $lpvm = filter_input(INPUT_POST, "lpvm");
    $lisatietoa =filter_input(INPUT_POST, "lisatietoa");
    $lajinro = filter_input(INPUT_POST, "lajinro");

    if(isset($etunimi)){
      addVuokra($vuokrausnro, $etunimi, $sukunimi, $apvm, $lpvm, $lisatietoa,$lajinro);
        echo '<div class="alert alert-success" role="alert">Kysely lähetetty onnistuneesti!</div>';    
    }
   $selectedID = isset($lajinro) ? $lajinro : 0;

?>     

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