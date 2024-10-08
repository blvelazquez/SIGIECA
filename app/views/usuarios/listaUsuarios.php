<?php

    require_once(__DIR__ . "/../../controllers/usuariosController.php");
    
    $obj = new usuariosController();
    $data = $obj->list();
?>

<div class="py-3 px-4">
    <h2 class="h3 mb-0 text-gray-800 text-center">Lista de Usuarios</h2>
</div>
<hr>
<div class="row justify-content-end">
    <div class="col-auto">
        <a href="#views/usuarios/usuariosForm" class="btn btn-primary" ><i class="fas fa-plus-circle"></i> Agregar Registro</a>
    </div>
</div>
<div class="dropdown-divider"></div>
<table id="miTabla" class="table table-sm table-striped table-hover mt-4" >
    <thead >
        <tr>
            <th scope="col" class="col-sm-1">id</th>
            <th scope="col" class="col-sm-1">Usuario</th>
            <th scope="col" class="col-sm-3">Nombre</th>
            <th scope="col" class="col-sm-2">Email</th>
            <th scope="col" class="col-sm-1">Fecha de Registro</th>
            <th scope="col" class="col-sm-1">Último Acceso</th>
            <th scope="col" class="col-sm-1">Rol</th>
            <th scope="col" class="col-sm-4">Plantel</th>
            <th scope="col" class="col-sm-2">Acciones</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php if($data): ?>
            <?php foreach($data as $resp): ?>
                <tr id= <?=$resp['idUsuarios'] ?>>
                    <td> <?=$resp['idUsuarios'] ?></td>
                    <td><?=$resp['loginUsuario'] ?></td>
                    <td><?=$resp['nombreusuario'] ?> <?=$resp['apellidoPaternoUsuario'] ?> <?=$resp['apellidoMaternoUsuario'] ?></td>
                    <td><?=$resp['email'] ?></td>
                    <td><?=$resp['fechaRegistroUsuario'] ?></td>
                    <td><?=$resp['ultimoAccesoUsuario'] ?></td>
                    <td><?=$resp['nombre_Rol'] ?></td>
                    <td><?=$resp['plantel'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="#views/usuarios/editForm.php?id=<?= $resp['idUsuarios']?>" class="btn btn-sm btn-warning edit-btn"><i class="fas fa-pencil-alt"></i></a>   
                            <a href="#" class="btn btn-sm btn-danger ml-2" data-toggle="modal" data-target="#deleteModalUsuarios" data-id="<?= $resp['idUsuarios']?>"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>                    
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <th scope="col" class="col-sm-1">id</th>
            <th scope="col" class="col-sm-1">Usuario</th>
            <th scope="col" class="col-sm-3">Nombre</th>
            <th scope="col" class="col-sm-2">Email</th>
            <th scope="col" class="col-sm-1">Fecha de Registro</th>
            <th scope="col" class="col-sm-1">Último Acceso</th>
            <th scope="col" class="col-sm-1">Rol</th>
            <th scope="col" class="col-sm-4">Plantel</th>
            <th scope="col" class="col-sm-2">Acciones</th>
        </tr>
    </tfoot>

</table>
