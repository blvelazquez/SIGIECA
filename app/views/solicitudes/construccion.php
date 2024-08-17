<?php

require_once(__DIR__ . "/../../controllers/espaciosController.php");
require_once(__DIR__ . "/../../controllers/partidasController.php");
require_once(__DIR__ . "/../../controllers/procesosController.php");

$const = new espaciosController();
$partidas = new partidasController();
$procesos = new procesosController();

$dataProcesos = $procesos->list();
$dataPartidas = $partidas->list();
$dataConst = $const->list();

?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="#views/solicitudes/listaSolicitudes" class="btn btn-primary" ><i class="fas fa-eye"></i> Ver Listado</a>
        </div>
    </div>    
    <div>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title fs-5"> <strong>Registro de Solicitud de Construcción</strong></h5>
                </div>
                <div class="modal-body">
                    <form action="app/views/solicitudes/storeConstruccion.php" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="idEspacio" class="form-label">Tipo de Construcción:</label>
                                <select name="idEspacio" id="idEspacio" class="form-control">
                                    <?php foreach($dataConst as $resp): ?>
                                        <option value="<?=$resp['idEspacio'] ?>"><?=$resp['Descripcion'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="idPartida" class="form-label">Partida:</label>
                                <select name="idPartida" id="idPartida" class="form-control">
                                    <?php foreach($dataPartidas as $resp): ?>
                                        <option value="<?=$resp['idPartida'] ?>"><?=$resp['idPartida'].' '.$resp['nombre_partida'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="idProceso" class="form-label">Proceso:</label>
                                <select name="idProceso" id="idProceso" class="form-control">
                                    <?php foreach($dataProcesos as $resp): ?>
                                        <option value="<?=$resp['idProceso'] ?>"><?=$resp['idProceso'].' '.$resp['nombre_proceso'] ?></option>
                                    <?php endforeach; ?>
                                </select>                                
                            </div>
                        </div>
                        <fieldset class="border p-2 mb-3">
                        <legend class="w-auto h6 text-dark">Descripción:</legend>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="10" required></textarea>
                        </fieldset>



                        <div class="d-flex justify-content-end modal-footer">
                            <input type="hidden" name='tipo' id='tipo' value='1'>
                            <input type="hidden" name='accion' id='accion' value=''>
                            <button type="submit" class="btn btn-warning ml-2" onclick="setAccion('guardar')">
                                <i class="fas fa-save"></i> Guardar borrador</button>
                            <button type="submit" class="btn btn-primary ml-2" onclick="setAccion('enviar')">
                                <i class="fas fa-save"></i> Enviar</button>                        
                        </div>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
