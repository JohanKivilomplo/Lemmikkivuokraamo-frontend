<?php
function login($fname, $lname, $pw){

    require_once 'db.php';

    //Tarkistetaan onko muttujia asetettu
    if( !isset($fname) || !isset($lname) || !isset($pw) ){
        throw new Exception("Missing parameters. Cannot log in.");
    }

    //Tarkistetaan, ettei tyhjiä arvoja muuttujissa
    if( empty($fname) || !isset($lname) || empty($pw) ){
        throw new Exception("Cannot log in with empty values.");
    }

    try{
        $pdo = openDb();
        //Haetaan käyttäjä annetulla käyttäjänimellä
        $sql = "SELECT username, password, firstname, lastname FROM person WHERE username=?";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $uname);
        $statement->execute();

        if($statement->rowCount() <=0){
            throw new Exception("Person not found! Cannot log in!");
        }

        $row = $statement->fetch();

        //Tarkistetaan käyttäjän antama salasana tietokannan salasanaa vasten
        if(!password_verify($pw, $row["password"] )){
            throw new Exception("Wrong password!!");
        }

        //Jos käyttäjä tunnistettu, talletetaan käyttäjän tiedot sessioon
        $_SESSION["username"] = $uname;
        $_SESSION["fname"] = $row["firstname"];
        $_SESSION["lname"] = $row["lastname"];

    }catch(PDOException $e){
        throw $e;
    }

}

function logout(){
    //Tyhjennetään ja tuhotaan nykyinen sessio.
    try{
        session_unset();
        session_destroy();
    }catch(Exception $e){
        throw $e;
    }
}

?>