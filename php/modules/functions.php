<?php
function getDogProducts(){
    require_once MODULES_DIR.'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 1";
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
        // Nouda kaikki tuotteet jonka lajinro on 6
        $sql = "SELECT * FROM oheistuotteet WHERE lajinro = 6";
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
        // Nouda kaikki tuotteet jonka lajinro on 1
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 1";
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
        // Nouda kaikki tuotteet jonka lajinro on 2
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 2";
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
        // Nouda kaikki tuotteet jonka lajinro on 3
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 3";
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
        // Nouda kaikki tuotteet jonka lajinro on 4
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 4";
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
        // Nouda kaikki tuotteet jonka lajinro on 5
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 5";
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
        // Nouda kaikki tuotteet jonka lajinro on 6
        $sql = "SELECT * FROM KAMPPANJA WHERE lajinro = 6";
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
        echo "Palautetta ei voitu antaa, syötä tietosi";
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


function addVuokra($vuokrausnro, $etunimi, $sukunimi, $apvm, $lpvm, $lisatietoa, $lajinro) {
    require_once MODULES_DIR.'db.php';

    if( !isset($etunimi) || !isset($sukunimi) || !isset($apvm) || !isset($lpvm) || !isset($lisatietoa)|| !isset($lajinro) ){
        echo "Kyselyä ei voitu lähettää, tarkista syöttämäsi tiedot";
        exit;
    }

    try{
        $pdo = openDb();
        $sql = "INSERT INTO vuokra (vuokrausnro, etunimi, sukunimi, apvm, lpvm, lisatietoa, lajinro) 
        VALUES (?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute( array($vuokrausnro, $etunimi, $sukunimi, $apvm, $lpvm, $lisatietoa, $lajinro) );

        echo "Kysely lähetetty!";
    }catch(PDOException $e){
        echo "Kyselyä ei lähetetty, tarkista tiedot";
        echo $e->getMessage();
    }

}

?>