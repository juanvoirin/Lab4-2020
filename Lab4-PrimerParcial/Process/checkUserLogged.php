<?php
    namespace Process;

    //require_once("Config/Autoload.php");

    use Model\User as User;

    session_start();

    if(isset($_SESSION["loggedUser"])){

        $loggedUser = $_SESSION["loggeduser"];
    }else{
        echo "<script> if(confirm('Su tiempo de sesion ha expirado, vuelva a loguearse!'));";  
        echo "window.location = 'index.php'; </script>";header('location:index.php');
    }

?>