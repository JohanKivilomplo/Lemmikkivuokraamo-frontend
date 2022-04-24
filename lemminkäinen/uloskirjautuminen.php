<?php
    include 'authorization.php';

    if(isset($_SESSION["username"])){
        logout();
        header("Location: uloskirjautuminen.php");
    }else{
        echo '<div class="alert alert-success" role="alert">Logged out!!</div>';
    }

?>