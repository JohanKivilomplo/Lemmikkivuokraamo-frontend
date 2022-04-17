<?php
function getDogProducts(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 1";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

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

function getCat(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM LAJI WHERE lajinro = 2";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getCatProducts(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 2";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getTurtle(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM LAJI WHERE lajinro = 3";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getTurtleProducts(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 3";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getBird(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM LAJI WHERE lajinro = 4";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getBirdProducts(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 4";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getSheep(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM LAJI WHERE lajinro = 5";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getSheepProducts(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 5";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}


function getHorse(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM LAJI WHERE lajinro = 6";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getHorseProducts(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 6";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function addFeedback($palautenro, $etunimi, $sukunimi, $sahkoposti, $puhelinnro, $palaute) {
    require_once 'db.php'; // DB connection

    //Tarkistetaan onko parametreja asetettu
    if( !isset($etunimi) || !isset($sukunimi) || !isset($sahkoposti) || !isset($puhelinnro) || !isset($palaute) ){
        echo "Parametreja puuttui!! Ei voida lisätä työaikaa";
        exit;
    }

    try{
        $pdo = openDb();
        //Suoritetaan parametrien lisääminen tietokantaan.
        $sql = "INSERT INTO palaute (palautenro, etunimi, sukunimi, sposti, puhnro, palaute) VALUES (?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute( array($palautenro, $etunimi, $sukunimi, $sahkoposti, $puhelinnro, $palaute) );

        echo "Palaute tallennettu<br><br>";
    }catch(PDOException $e){
        echo "Palautetta ei tallennettu";
        echo $e->getMessage();
    }

}
?>