<?php
function getProducts(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM oheistuotteet";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}

function getAnimal(){
    require_once 'db.php';

    try{
        $pdo = openDb();
        // Create SQL query to get all rows from a table
        $sql = "SELECT * FROM LAJI";
        // Execute the query
        $people = $pdo->query($sql);

        return $people->fetchAll();
    }catch(PDOException $e){
        throw $e;
    }
}
?>