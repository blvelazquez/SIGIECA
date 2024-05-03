<?php

require_once(__DIR__ . "/../../controllers/usuariosController.php");
$obj = new usuariosController();
$obj->save('paco','12345678');
?>
