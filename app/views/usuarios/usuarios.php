<?php

require_once(__DIR__ . "/../../controllers/usuariosController.php");
$obj = new usuariosController();
$obj->guardar('usuario2','12345678');
?>
<div>Esta es la vista</div>