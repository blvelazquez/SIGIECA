<?php
    require_once("../../Controllers/proveedoresController.php");
    $obj = new proveedoresController();
    // echo($_POST['id']);
    // echo($_POST['accion']);

    switch($_POST['accion']){
        case'guardar':
            $obj->save($_POST['numpro'], $_POST['provname'], $_POST['replegal']);
            break;
        case'eliminar':
            $obj->delete($_POST['id']);
            break;
        case'actualizar':
            break;
    }
    

    // switch($_POST['accion']){
    //     case 'guardar':
    //         $obj->save($_POST['numpro'], $_POST['provname'], $_POST['name'], $_POST['user'], 
    //                 $_POST['pass'], $_POST['email'], $_POST['rol']);
    //         break;
    //     case 'eliminar':
    //         $obj->delete($_POST['id']);
    //         break;
    //     case 'actualizar':
    //     break;
    //     default:
    //         echo('La opción  no es valida');
    //         break;
    //     }



       
    



?>