<?php
    require_once("../../Controllers/usuariosController.php");
    $obj = new usuariosController();
    
    switch($_POST['accion']){
        case 'guardar':
            $obj->save($_POST['fname'], $_POST['lname'], $_POST['name'], $_POST['user'], 
                    $_POST['pass'], $_POST['email'], $_POST['rol']);
            break;
        case 'eliminar':
            $obj->delete($_POST['id']);
            break;
        case 'actualizar':
        break;
        default:
            echo('La opción  no es valida');
            break;
    }
?>