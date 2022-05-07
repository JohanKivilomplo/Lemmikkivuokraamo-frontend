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

<?php
include MODULES_DIR."person.php";

$id = filter_input(INPUT_GET, "asiakasnro");
if(isset($id)){
    try{
        deletePerson($id);
        echo '<div class="alert alert-success" role="alert">Person deleted!!</div>';
    }catch(Exception $e){
        echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
    }
    
}
// Hae asiakkaat kannasta
$people = getPeople();
// Tulosta asiakkaat
echo "<ul>";
foreach($people as $p){
    echo "<li>".$p["etunimi"]." ".$p["sukunimi"].'<a href="asiakkaat.php?asiakasnro=' . $p["asiakasnro"] . '" class="btn btn-primary">Delete</a> </li>';
}
echo "</ul>";
