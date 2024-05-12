<?php
    require_once("../../Controllers/proveedoresController.php");
    $obj = new proveedoresController();
    
    $obj->save($_POST['numpro'], $_POST['provname'], $_POST['replegal']);

?>