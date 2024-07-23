<?php
require_once(__DIR__ . "/../../controllers/equipoDTAController.php");
require_once(__DIR__ . "/../../controllers/equipoServicioController.php");

$eqdta = new equipoDTAController();
$eqserv = new equipoServicioController();

$dataEqDTA = $eqdta->list();
$dataEqServ = $eqserv->list();


echo("Hola soy mantenimiento de equipo")

//Llenar dos combos
//1 de sig_equipo_dta
//2 de sig_equipo_servicio

?>


<div class="row mb-3">
        <div class="col">
            <label for="rol" class="form-label">Equipo DTA:</label>

            <select name="rol" id="rol" class="form-control">
                <?php foreach($dataEqDTA as $resp): ?>
                    <option value="<?=$resp['idEquipoDTA'] ?>"><?=$resp['Descripcion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="rol" class="form-label">Equipo de Servicio:</label>

            <select name="rol" id="rol" class="form-control">
                <?php foreach($dataEqServ as $resp): ?>
                    <option value="<?=$resp['idEquipoServicio'] ?>"><?=$resp['Descripcion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>