<?php 
require_once(__DIR__ . "/../../controllers/espaciosController.php");
require_once(__DIR__ . "/../../controllers/tiposMttoController.php");

$esp = new espaciosController();
$mtto = new tiposMttoController();

$dataEsp = $esp->list();
$dataMtto = $mtto->list();


    //llenar dos combos 
    //1 de sig_espacios
    //2 sig_tipo_mantenimiento

?>

    <div class="row mb-3">
        <div class="col">
            <label for="rol" class="form-label">Mantenimiento:</label>

            <select name="rol" id="rol" class="form-control">
                <?php foreach($dataMtto as $resp): ?>
                    <option value="<?=$resp['idTipomto'] ?>"><?=$resp['Descripcion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="rol" class="form-label">Espacios:</label>

            <select name="rol" id="rol" class="form-control">
                <?php foreach($dataEsp as $resp): ?>
                    <option value="<?=$resp['idEspacio'] ?>"><?=$resp['Descripcion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>