<?php
require_once(__DIR__ . "/../../controllers/equipoDTAController.php");
require_once(__DIR__ . "/../../controllers/equipoServicioController.php");
require_once(__DIR__ . "/../../controllers/partidasController.php");
require_once(__DIR__ . "/../../controllers/procesosController.php");


$eqdta = new equipoDTAController();
$eqserv = new equipoServicioController();
$partidas = new partidasController();
$procesos = new procesosController();

$dataEqDTA = $eqdta->list();
$dataEqServ = $eqserv->list();
$dataProcesos = $procesos->list();
$dataPartidas = $partidas->list();


echo("Hola soy mantenimiento de equipo")

//Llenar dos combos
//1 de sig_equipo_dta
//2 de sig_equipo_servicio

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
                    <h5 class="modal-title fs-5"> <strong>Registro de Solicitud de Mantenimiento de Equipo</strong></h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="rol" class="form-label">Equipo DTA:</label>
                                <select name="rol" id="rol" class="form-control">
                                    <?php foreach($dataEqDTA as $resp): ?>
                                        <option value="<?=$resp['idEquipoDTA'] ?>"><?=$resp['Descripcion'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="idEquipoServicio" class="form-label">Equipo de Servicio:</label>
                                <select name="idEquipoServicio" id="idEquipoServicio" class="form-control">
                                    <?php foreach($dataEqServ as $resp): ?>
                                        <option value="<?=$resp['idEquipoServicio'] ?>"><?=$resp['Descripcion'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="idPartida" class="form-label">Partida:</label>
                                <select name="idPartida" id="idPartida" class="form-control">
                                    <?php foreach($dataPartidas as $resp): ?>
                                        <option value="<?=$resp['idPartida'] ?>"><?=$resp['nombre_partida'] ?></option>
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
                            <input type="hidden" name='accion' id='accion' value='guardar'>
                            <button type="submit" class="btn btn-warning ml-2"><i class="fas fa-save"></i> Guardar borrador</button>
                            <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-save"></i> Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>






   