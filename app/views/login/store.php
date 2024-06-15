<?php
    require_once("../../Controllers/loginController.php");
    $obj = new loginController();

   
    switch($_POST['log']){
        case 'in':
            if($obj->login($_POST['usuario'], $_POST['password'])){
                session_start();
                $_SESSION['usuario'] = $_POST['usuario'];
                header("Location:../../../index.php");
            }else{
                echo('Error: usuario o passwrod incorrecto');
            }
            break;
        case 'out':
            session_start();
            session_unset();
            session_destroy();
            header("Location:../../../index.php");
        break;
        deefault:
            echo('La opción  no es valida');
        break;
    }

?>