<?php

function getPeople(){
    require_once MODULES_DIR.'db.php';

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

function addPerson($fname, $lname, $email, $puhnro, $osoite, $postinro, $postitmp, $uname, $pw){
    require_once MODULES_DIR.'db.php';
    
    //Tarkistetaan onko muttujia asetettu
    if( !isset($fname) || !isset($lname) || !isset($email) || !isset($puhnro) 
    || !isset($osoite) || !isset($postinro) || !isset($postitmp) || !isset($uname) || !isset($pw)) {
        throw new Exception("Kohtia puuttuu. Ei voida lisätä käyttäjää!");
    }
    
    //Tarkistetaan, ettei tyhjiä arvoja muuttujissa
    if( empty($fname) || empty($lname) || empty($email) || empty($puhnro)
     || empty($osoite) || empty($postinro) || empty($postitmp) || empty($uname) || empty($pw)){
        throw new Exception("Et voi asettaa tyhjiä arvoja");
    }
    
    try{
        $pdo = openDb();
        //Suoritetaan parametrien lisääminen tietokantaan.
        $sql = "INSERT INTO ASIAKAS (etunimi, sukunimi, sposti, puhnro, osoite, postinro, postitmp, username, salasana) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $fname);
        $statement->bindParam(2, $lname);
        $statement->bindParam(3, $email);
        $statement->bindParam(4, $puhnro);
        $statement->bindParam(5, $osoite);
        $statement->bindParam(6, $postinro);
        $statement->bindParam(7, $postitmp);
        $statement->bindParam(8, $uname);

        $hash_pw = password_hash($pw, PASSWORD_DEFAULT);
        $statement->bindParam(9, $hash_pw);
        
        $statement->execute();
    
        echo "Tervetuloa ".$fname." ".$lname.". Sinut on lisätty tietokantaan"; 
    }catch(PDOException $e){
        throw $e;
    }
  }

    $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
    $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $puhnro = filter_input(INPUT_POST, "puhnro", FILTER_SANITIZE_NUMBER_INT);
    $osoite = filter_input(INPUT_POST, "osoite", FILTER_SANITIZE_SPECIAL_CHARS);
    $postinro = filter_input(INPUT_POST, "postinro", FILTER_SANITIZE_NUMBER_INT);
    $postitmp = filter_input(INPUT_POST, "postitmp", FILTER_SANITIZE_SPECIAL_CHARS);
    $uname = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $pw = filter_input(INPUT_POST, "pw", FILTER_SANITIZE_SPECIAL_CHARS);


    if(isset($fname)){
        try{
            addPerson($fname, $lname, $email, $puhnro, $osoite, $postinro, $postitmp, $uname, $pw);
            echo '<div class="alert alert-success" role="alert">Person added!!</div>';
        }catch(Exception $e){
            echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
        }
        
    }

    function deletePerson($id){
        require_once MODULES_DIR.'db.php';
        
        //Tarkistetaan onko muttujia asetettu
        if( !isset($id) ){
            throw new Exception("Missing parameters! Cannot delete person!");
        }
        
        try{
            $pdo = openDb();
            // Start transaction
            $pdo->beginTransaction();
            $sql = "DELETE FROM VUOKRA WHERE asiakasnro = ?";
            $statement = $pdo->prepare($sql);
            $statement->bindParam(1, $id);        
            $statement->execute();
            // Delete from person table
            $sql = "DELETE FROM ASIAKAS WHERE asiakasnro = ?";
            $statement = $pdo->prepare($sql);
            $statement->bindParam(1, $id);        
            $statement->execute();
            // Commit transaction
            $pdo->commit();
        }catch(PDOException $e){
            // Rollback transaction on error
            $pdo->rollBack();
            throw $e;
        }
    }