<?php
    require_once("../../Controllers/usuariosController.php");
    $obj = new usuariosController();
    $obj->save($_POST['fname'], $_POST['lname'], $_POST['name'], $_POST['user'], 
                $_POST['pass'], $_POST['email'], $_POST['rol']);

?>