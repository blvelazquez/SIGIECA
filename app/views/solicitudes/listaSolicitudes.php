<?php
    require_once(__DIR__ . "/../../controllers/solicitudesController.php");
    
    $obj = new solicitudesController();
    $data = $obj->list();
    // print_r($data);
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