<?php
        //session_start();
        //$idUsuario = $_SESSION['idUsuario'];
        require_once("../../Controllers/solicitudesController.php");
        $obj = new solicitudesController();

        //echo($_POST['accion']);

        switch($_POST['accion']){
                case 'guardar':
                        echo('estoy en guardar');
                        break;
                case 'enviar':
                        echo('estoy en enviar');
                        break;
                default:
                        echo('La opción  no es valida');
                        break;        
        }
?>