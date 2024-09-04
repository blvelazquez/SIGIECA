<?php
    require_once(__DIR__ . "/../../controllers/solicitudesController.php");
    
    $obj = new solicitudesController();
    $data = $obj->list();
//    print_r($data);
?>

<div class="py-3 px-4">
            <h2 class="h3 mb-0 text-gray-800 text-center">Listado de Solicitudes</h2>
</div>
<hr>
<div class="row justify-content-end">
    <div class="col-auto">
        <div class="nav-item dropdown no-arrow">
            <a class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-plus-circle"></i> 
                Agregar Registro
            </a>            
            <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#views/solicitudes/construccion">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Construción
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#views/solicitudes/inmuebles">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Mantenimiento de Inmuebles
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#views/solicitudes/equipo">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Mantenimiento de Equipo
                </a>
            </div>
        </div>
    </div>
</div>
<div class="dropdown-divider"></div>
<table id="miTabla" class="table table-sm table-striped table-hover mt-4" >
    <thead >
        <tr>
            <th scope="col" class="text-center col-sm-2">Solicitud</th>
            <th scope="col" class="text-center col-sm-1">Usuario</th>
            <th scope="col" class="text-center col-sm-2">Partida</th>
            <th scope="col" class="text-center col-sm-1">Proceso</th>
            <th scope="col" class="text-center col-sm-1">Fecha de Solicitud</th>
            <th scope="col" class="text-center col-sm-1">Tipo</th>
            <th scope="col" class="text-center col-sm-2">Descripción</th>
            <th scope="col" class="text-center col-sm-1">Espacio</th>
            <th scope="col" class="text-center col-sm-2">Acciones</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php if($data): ?>
            <?php foreach($data as $resp): ?>
                <tr>
                    <td><?=$resp['idSolicitud'] ?></td>
                    <td><?=$resp['nombreUsuario'].' '.$resp['apellidoPaternoUsuario'].' '.$resp['apellidoMaternoUsuario'] ?></td>
                    <td><?=$resp['idPartida'].' '.$resp['nombre_partida'] ?></td>
                    <td><?=$resp['idProceso'].' '.$resp['nombre_proceso']?></td>
                    <td><?= date('Y-m-d', strtotime($resp['fecha_solicitud'])) ?></td>
                    <td>
                        <?= ($resp['tipo'] == 1) ? 'Construcción' : 
                            (($resp['tipo'] == 2) ? 'Mantenimiento de inmuebles' : 
                            (($resp['tipo'] == 3) ? 'Mantenimiento de equipo' : ''));
                        ?>
                    </td>
                    <td><?=$resp['descripcion']?></td>
                    <td><?=$resp['Descripcion_esp']?></td>
                    <td>
                        <div class="btn-group">
                            <a href="#views/solicitudes/editFormConstruccion.php?id=<?= $resp['idSolicitud']?>" class="btn btn-sm btn-warning edit-btn"><i class="fas fa-pencil-alt"></i></a>   
                            <a href="#" class="btn btn-sm btn-danger ml-2"> <i class="fas fa-trash"></i></a>
                            <a href="#" class="btn btn-sm btn-success ml-2"> <i class="fas fa-eye"></i></a>
                        </div>
                    </td>                    
                </tr>

            <?php endforeach; ?>
        <?php endif; ?>            
    </tbody>
    <tfoot>
        <tr>
            <th scope="col" class="text-center col-sm-2">Solicitud</th>
            <th scope="col" class="text-center col-sm-1">Usuario</th>
            <th scope="col" class="text-center col-sm-2">Partida</th>
            <th scope="col" class="text-center col-sm-1">Proceso</th>
            <th scope="col" class="text-center col-sm-1">Fecha de Solicitud</th>
            <th scope="col" class="text-center col-sm-1">Tipo</th>
            <th scope="col" class="text-center col-sm-2">Descripción</th>
            <th scope="col" class="text-center col-sm-1">Espacio</th>
            <th scope="col" class="text-center col-sm-2">Acciones</th>
        </tr>
    </tfoot>

</table>
