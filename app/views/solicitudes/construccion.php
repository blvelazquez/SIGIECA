<?php

require_once(__DIR__ . "/../../controllers/espaciosController.php");
require_once(__DIR__ . "/../../controllers/partidasController.php");
require_once(__DIR__ . "/../../controllers/procesosController.php");
require_once(__DIR__ . "/../../controllers/rolController.php");

session_start();
$rolId = $_SESSION['rolUsuario'];

$const = new espaciosController();
$partidas = new partidasController();
$procesos = new procesosController();
$objRol = new rolController();

$dataProcesos = $procesos->list();
$dataPartidas = $partidas->list();
$dataConst = $const->list();
$dataRol = $objRol->listId($rolId);

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

                <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" id="formTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Pestaña 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Pestaña 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Pestaña 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Pestaña 4</a>
                        </li>

                    </ul>

                     <!-- Formulario con pestañas -->
                     <form action="app/views/solicitudes/storeConstruccion.php" method="post" enctype="multipart/form-data">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Pestaña 1 -->
                             <br>
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
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
                                    <?php if($dataRol[0]['cve_Rol'] == 'ADM'):?>
                                        <label for="idPartida" class="form-label">Partida:</label>
                                        <select name="idPartida" id="idPartida" class="form-control">
                                            <?php foreach($dataPartidas as $resp): ?>
                                                <option value="<?=$resp['idPartida'] ?>"><?=$resp['idPartida'].' '.$resp['nombre_partida'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <?php endif ?>
                                    </div>
                                    <div class="col">
                                    <?php if($dataRol[0]['cve_Rol'] == 'ADM'):?>
                                        <label for="idProceso" class="form-label">Proceso:</label>
                                        <select name="idProceso" id="idProceso" class="form-control">
                                            <?php foreach($dataProcesos as $resp): ?>
                                                <option value="<?=$resp['idProceso'] ?>"><?=$resp['idProceso'].' '.$resp['nombre_proceso'] ?></option>
                                            <?php endforeach; ?>
                                        </select> 
                                        <?php endif ?>                               
                                    </div>
                                </div>
                                <fieldset class="border p-2 mb-3">
                                    <legend class="w-auto h6 text-dark">Descripción:</legend>
                                    <textarea name="descripcion" id="descripcion" class="form-control" rows="10" required></textarea>
                                </fieldset>
                            </div>
                            
                            <!-- Pestaña 2 -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <fieldset class="border p-2 mb-3">
                                    <legend class="w-auto h6 text-dark">Descripción:</legend>
                                    <textarea name="descripcion" id="descripcion" class="form-control" rows="10" required></textarea>
                                </fieldset>
                            </div>

                            <!-- Pestaña 3 -->
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <h3>En contrucción...!</h3>
                            </div>
                        
                            <!-- Pestaña 4 -->
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <h3>En contrucción...4!</h3>
                            </div>

                        </div>

                        
                        <!-- Botón de envío -->
                        <div class="d-flex justify-content-end modal-footer">
                            <input type="hidden" name='tipo' id='tipo' value='1'>
                            <input type="hidden" name='accion' id='accion' value=''>

                            <!-- Botón que abre el modal y define la acción a 'guardar' -->
                            <button type="button" class="btn btn-warning ml-2" data-toggle="modal" data-target="#borradorModalConstruccion" onclick="setAccion('guardar')">
                                <i class="fas fa-save"></i> Guardar borrador
                            </button>
                            <button type="submit" class="btn btn-primary ml-2" onclick="setAccion('enviar')">
                                <i class="fas fa-save"></i> Enviar
                            </button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
