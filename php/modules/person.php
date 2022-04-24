<?php

function getPeople(){
    include 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM ASIAKAS";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function addPerson($fname, $lname, $email, $puhnro, $osoite, $postinro, $postitmp, $pw){
    include 'db.php'; // DB connection
    
    //Tarkistetaan onko muttujia asetettu
    if( !isset($fname) || !isset($lname) || !isset($email) || !isset($puhnro) 
    || !isset($osoite) || !isset($postinro) || !isset($postitmp) || !isset($pw)) {
        throw new Exception("Kohtia puuttuu. Ei voida lisätä käyttäjää!");
    }
    
    //Tarkistetaan, ettei tyhjiä arvoja muuttujissa
    if( empty($fname) || empty($lname) || empty($email) || empty($puhnro)
     || empty($osoite) || empty($postinro) || empty($postitmp) || empty($pw)){
        throw new Exception("Et voi asettaa tyhjiä arvoja");
    }
    
    try{
        $pdo = openDb();
        //Suoritetaan parametrien lisääminen tietokantaan.
        $sql = "INSERT INTO ASIAKAS (etunimi, sukunimi, sposti, puhnro, osoite, postinro, postitmp, salasana) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $fname);
        $statement->bindParam(2, $lname);
        $statement->bindParam(3, $email);
        $statement->bindParam(4, $puhnro);
        $statement->bindParam(5, $osoite);
        $statement->bindParam(6, $postinro);
        $statement->bindParam(7, $postitmp);

        $hash_pw = password_hash($pw, PASSWORD_DEFAULT);
        $statement->bindParam(8, $hash_pw);
        
        $statement->execute();
    
        echo "Tervetuloa ".$fname." ".$lname.". Sinut on lisätty tietokantaan"; 
    }catch(PDOException $e){
        throw $e;
    }
  }

    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname");

    if(isset($fname)){
        try{
            addPerson($fname, $lname, $email, $puhnro, $osoite, $postinro, $postitmp, $pw);
            echo '<div class="alert alert-success" role="alert">Person added!!</div>';
        }catch(Exception $e){
            echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
        }
        
    }
