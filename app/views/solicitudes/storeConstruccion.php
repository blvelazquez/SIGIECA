<?php
        session_start();
        $idUsuario = $_SESSION['idUsuario'];
        require_once("../../Controllers/solicitudesController.php");
        $obj = new solicitudesController();


        switch($_POST['accion']){
            case 'guardar':
                $obj->save($idUsuario, $_POST['idEspacio'], $_POST['idPartida'], $_POST['idProceso'], $_POST['descripcion'], $_POST['tipo']);
                break;
            case 'enviar':
                echo("estoy en enviar");
                break;
            default:
                echo('La opción  no es valida');
                break;
        }

        // switch($_POST['accion']){
        //     case 'guardar':
        //         $obj->save($_POST['fname'], $_POST['lname'], $_POST['name'], $_POST['user'], 
        //                 $_POST['pass'], $_POST['email'], $_POST['rol']);
        //         break;
        //     case 'eliminar':
        //         $obj->delete($_POST['id']);
        //         break;
        //     case 'actualizar':
        //         $obj->update($_POST['id'], $_POST['fname'], $_POST['lname'], $_POST['name'], $_POST['user'], 
        //                     $_POST['pass'], $_POST['email'], $_POST['rol'], $_POST['fechaRegistroUsuario'], $_POST['ultimoAccesoUsuario'] );
        //     break;
        //     default:
        //         echo('La opción  no es valida');
        //         break;
        // }


?>