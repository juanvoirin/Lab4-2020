<?php
namespace Process;

//require_once('Config/Autoload.php');
use Model\User as User;

if($_POST){

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(($email == "user@myapp.com")){
        if($password == "123456"){

            session_start();

            $loggedUser = new User();
            $loggedUser->setEmail($email);
            $loggedUser->setPassword($password);

            $_SESSION["loggedUser"] = $loggedUser;

            header('location: ../add-form.php');
        }else{
            echo "<script> if(confirm('Contraseña Incorrecta, vuelva a intentarlo.'));";
            echo "window.location = '../index.php'; </script>";

        }

    }else{
        echo "<script> if(confirm('Datos incorrectos, vuelva a intentarlo.'));";
        echo "window.location = '../index.php'; </script>";
    

    }

}else{
    echo "<script> if(confirm('No es posible procesar informacion si no es por metodo POST !'));";  
    echo "window.location = '../index.php'; </script>";

}



?>