<?php

    require_once(__DIR__ . "/../../controllers/proveedoresController.php");
    
    $obj = new proveedoresController();
    $data = $obj->list();
    // print_r($data);
?>

<div class="py-3 px-4">
            <h2 class="h3 mb-0 text-gray-800 text-center">Lista de Proveedores</h2>
</div>
<hr>
<div class="row justify-content-end">
    <div class="col-auto">
        <a href="#views/proveedores/proveedoresForm" class="btn btn-primary" ><i class="fas fa-plus-circle"></i> Agregar Registro</a>
    </div>
</div>
<table class="table table-sm table-striped table-hover mt-4">
    <thead >
        <tr>
            <th scope="col" class="col-sm-2">Núm. Proveedor</th>
            <th scope="col" class="col-sm-5">Proveedor</th>
            <th scope="col" class="col-sm-3">Representante Legal</th>
            <th scope="col" class="col-sm-2"> </th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php if($data): ?>
            <?php foreach($data as $resp): ?>
                <tr id= <?=$resp['idProveedor'] ?>>
                    <td><?=$resp['Numero_Proveedor'] ?></td>
                    <td><?=$resp['Proveedor'] ?></td>
                    <td><?=$resp['Representante_Legal'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-warning edit-btn" ><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>                    
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>

</table>

