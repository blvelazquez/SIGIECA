<?php

    require_once(__DIR__ . "/../../controllers/rolController.php");
    require_once(__DIR__ . "/../../controllers/plantelController.php");
    
    $obj = new rolController();
    $plantel = new plantelController();
    $listPlantel = $plantel->list();
    $data = $obj->list();
?>
 

<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="#views/usuarios/listaUsuarios" class="btn btn-primary" ><i class="fas fa-eye"></i> Ver Listado</a>
        </div>
    </div>
    <div>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title fs-5"> <strong>Registro de Usuarios</strong></h5>
                </div>
                <div class="modal-body">
                    <form action="app/views/usuarios/store.php" method="post" enctype="multipart/form-data">
                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-dark">Información Personal </legend>
                            <div class="mb-2 row">
                                <div class="col">
                                    <label for="fname" class="form-label">Apellido Paterno:</label>
                                    <input type="text" name="fname" id="fname" class="form-control" required>
                                </div>
                                <div class="col">
                                    <label for="lname" class="form-label">Apellido Materno:</label>
                                    <input type="text" name="lname" id="lname" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="name" class="form-label">Nombre(s):</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-dark">Cuenta </legend>
                            <div class="mb-2 row">
                                <div class="col">
                                    <label for="user" class="form-label">Usuario:</label>
                                    <input name="user" id="user" class="form-control" required></input>
                                </div>                    
                                <div class="col">
                                    <label for="pass" class="form-label">Password:</label>
                                    <input type="password" name="pass" id="pass" class="form-control" required></input>
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">Correo Electrónico:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com" required>
                                </div>                        
                            </div>
                        </fieldset>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="rol" class="form-label">Rol:</label>

                                <select name="rol" id="rol" class="form-control">
                                    <?php foreach($data as $resp): ?>
                                        <option value="<?=$resp['idRol'] ?>"><?=$resp['nombre_Rol'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="plantel" class="form-label">Plantel:</label>

                                <select name="plantel" id="plantel" class="form-control">
                                    <option value="">Seleccione un plantel</option> <!-- Opción en blanco -->
                                    <?php foreach($listPlantel as $resp): ?>
                                        <option value="<?=$resp['idCCT'] ?>"><?=$resp['plantel'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="col"></div>
                        </div>

                        <div class="d-flex justify-content-end modal-footer">
                            <input type="hidden" name='accion' id='accion' value='guardar'>
                            <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-save"></i> Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

