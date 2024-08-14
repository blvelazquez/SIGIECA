<?php 
require_once(__DIR__ . "/../../controllers/espaciosController.php");
require_once(__DIR__ . "/../../controllers/tiposMttoController.php");
require_once(__DIR__ . "/../../controllers/partidasController.php");
require_once(__DIR__ . "/../../controllers/procesosController.php");

$esp = new espaciosController();
$mtto = new tiposMttoController();
$partidas = new partidasController();
$procesos = new procesosController();

$dataEsp = $esp->list();
$dataMtto = $mtto->list();
$dataProcesos = $procesos->list();
$dataPartidas = $partidas->list();


    //llenar dos combos 
    //1 de sig_espacios
    //2 sig_tipo_mantenimiento

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
                    <h5 class="modal-title fs-5"> <strong>Registro de Solicitud de Mantenimiento a Inmueble</strong></h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="rol" class="form-label">Mantenimiento:</label>
                                <select name="rol" id="rol" class="form-control">
                                    <?php foreach($dataMtto as $resp): ?>
                                        <option value="<?=$resp['idTipomto'] ?>"><?=$resp['Descripcion'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
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
                        <!-- Aqui estoy haciendo un renglón que contiene una columna (espcios)... -->
                        <div class="row mb-3">
                            <div class="col">
                                <label for="idEspacio" class="form-label">Espacios:</label>

                                <select name="idEspacio" id="idEspacio" class="form-control">
                                    <?php foreach($dataEsp as $resp): ?>
                                        <option value="<?=$resp['idEspacio'] ?>"><?=$resp['Descripcion'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col"></div>
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
    
    


    