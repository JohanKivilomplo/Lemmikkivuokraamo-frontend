<?php
function getDogProducts(){
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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
    require_once MODULES_DIR.'db.php';

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

function getDogCampaigns(){
    require_once MODULES_DIR.'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 1";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getCatCampaigns(){
    require_once MODULES_DIR.'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 2";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}


function getTurtleCampaigns(){
    require_once MODULES_DIR.'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 3";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getBirdCampaigns(){
    require_once MODULES_DIR.'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 4";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getSheepCampaigns(){
    require_once MODULES_DIR.'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 5";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getHorseCampaigns(){
    require_once MODULES_DIR.'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 6";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}



function addFeedback($palautenro, $etunimi, $sukunimi, $sahkoposti, $puhelinnro, $palaute) {
    require_once MODULES_DIR.'db.php';

    //Tarkistetaan onko parametreja asetettu
    if( !isset($etunimi) || !isset($sukunimi) || !isset($sahkoposti) || !isset($puhelinnro) || !isset($palaute) ){
        echo "Palautetta ei voitu antaa, sy??t?? tietosi";
        exit;
    }

    try{
        $pdo = openDb();
        //Suoritetaan parametrien lis????minen tietokantaan.
        $sql = "INSERT INTO palaute (palautenro, etunimi, sukunimi, sposti, puhnro, palaute) VALUES (?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute( array($palautenro, $etunimi, $sukunimi, $sahkoposti, $puhelinnro, $palaute) );

        echo "Palaute tallennettu<br><br>";
    }catch(PDOException $e){
        echo "Palautetta ei tallennettu";
        echo $e->getMessage();
    }

}


function addVuokra($vuokrausnro, $etunimi, $sukunimi, $apvm, $lpvm, $lisatietoa, $lajinro) {
    require_once MODULES_DIR.'db.php';

    if( !isset($etunimi) || !isset($sukunimi) || !isset($apvm) || !isset($lpvm) || !isset($lisatietoa)|| !isset($lajinro) ){
        echo "Kysely?? ei voitu l??hett????, tarkista sy??tt??m??si tiedot";
        exit;
    }

    try{
        $pdo = openDb();
        $sql = "INSERT INTO vuokra (vuokrausnro, etunimi, sukunimi, apvm, lpvm, lisatietoa, lajinro) 
        VALUES (?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute( array($vuokrausnro, $etunimi, $sukunimi, $apvm, $lpvm, $lisatietoa, $lajinro) );

        echo "Kysely l??hetetty!";
    }catch(PDOException $e){
        echo "Kysely?? ei l??hetetty, tarkista tiedot";
        echo $e->getMessage();
    }

}

?>