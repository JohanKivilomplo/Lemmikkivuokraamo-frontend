<?php session_start(); ?>

<?php
    include '../php/modules/authorization.php';

    if(isset($_SESSION["username"])){
        logout();
        header("Location: ../index.php");
    }else{
        echo '<div class="alert alert-success" role="alert">Logged out!!</div>';
    }

?>