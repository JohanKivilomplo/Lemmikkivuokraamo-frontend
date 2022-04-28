<?php session_start(); ?>

<?php
    include MODULES_DIR.'authorization.php';

    if(isset($_SESSION["username"])){
        logout();
        header("Location: ../index.php");
    }else{
        echo '<div class="alert alert-success" role="alert">Logged out!!</div>';
    }

?>