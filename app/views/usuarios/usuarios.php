<?php

require_once(__DIR__ . "/../../controllers/usuariosController.php");
$obj = new usuariosController();
// $obj->guardar('usuario2','12345678');
?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="#views/usuarios/listaUsuarios" class="btn btn-primary" ><i class="fas fa-plus-circle"></i> Ver Listado</a>
        </div>
    </div>
</div>