<?php

require_once(__DIR__ . "/../../controllers/espaciosController.php");

$const = new espaciosController();

$dataConst = $const->list();


//echo('Hola, Soy Construcción');




//Llenar el com bo espacio
//De sig_espacios


?>

<div class="row mb-3">
        <div class="col">
            <label for="rol" class="form-label">Construcción:</label>

            <select name="rol" id="rol" class="form-control">
                <?php foreach($dataConst as $resp): ?>
                    <option value="<?=$resp['idEspacio'] ?>"><?=$resp['Descripcion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>