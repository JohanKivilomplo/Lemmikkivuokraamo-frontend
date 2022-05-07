<?php
function login($uname, $pw){

    require_once MODULES_DIR. 'db.php';

    // $uname = filter_input(INPUT_POST, "username");
    // $pw = filter_input(INPUT_POST, "password");

    //Tarkistetaan onko muttujia asetettu
    if( !isset($uname) || !isset($pw) ){
        throw new Exception("Missing parameters. Cannot log in.");
    }

    //Tarkistetaan, ettei tyhjiä arvoja muuttujissa
    if( empty($uname) || empty($pw) ){
        throw new Exception("Et voi kirjautua sisään tyhjillä arvoilla.");
    }

    try{
        $pdo = openDb();
        //Haetaan käyttäjä annetulla käyttäjänimellä
        $sql = "SELECT username, salasana, etunimi, sukunimi FROM ASIAKAS WHERE username=?";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $uname);
        $statement->execute();

        if($statement->rowCount() <=0){
            throw new Exception("Käyttäjätunnusta ei löydy");
        }

        $row = $statement->fetch();

        //Tarkistetaan käyttäjän antama salasana tietokannan salasanaa vasten
        if(!password_verify($pw, $row["salasana"] )){
            throw new Exception("Salasana on väärin!");
        }

        //Jos käyttäjä tunnistettu, talletetaan käyttäjän tiedot sessioon
        $_SESSION["username"] = $uname;
        $_SESSION["fname"] = $row["etunimi"];
        $_SESSION["lname"] = $row["sukunimi"];

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