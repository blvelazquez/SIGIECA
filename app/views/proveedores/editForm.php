<?php
    require_once(__DIR__ . "/../../controllers/proveedoresController.php");
    $obj = new proveedoresController();

    // Dividir la cadena en partes usando el punto como delimitador
    $parts = explode('.', $_GET['id']);
    //print_r($parts);
    $idProveedor = $parts[0];

    $data = $obj->show($idProveedor);
    $resp = $data[0];
    print_r($resp);
?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="#views/proveedores/listaProveedores" class="btn btn-primary" ><i class="fas fa-eye"></i> Ver Listado</a>
        </div>
    </div>
    <div>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title fs-5"> <strong>Actualizar Proveedores</strong></h5>
                </div>
                <div class="modal-body">
                    <form action="app/views/proveedores/store.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value= "<?= $resp['idProveedor']?>">
                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-dark">Datos Generales </legend>
                            <div class="mb-2 row">
                                <div class="col">
                                    <label for="numpro" class="form-label">Número Proveedor:</label>
                                    <input type="text" name="numpro" id="numpro" class="form-control" value="<?= $resp['Numero_Proveedor']?> " required>
                                    
                                    
                                </div>
                                <div class="col">
                                    <label for="provname" class="form-label">Proveedor:</label>
                                    <input type="text" name="provname" id="provname" class="form-control" value="<?= $resp['Proveedor']?> "required>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-dark">Legal </legend>
                            <div class="mb-2 row">
                                <div class="col">
                                    <label for="replegal" class="form-label">Representante Legal:</label>
                                    <input name="replegal" id="replegal" class="form-control" value="<?= $resp['Representante_Legal']?>" required>
                                </div>                    
                                <div class="col">
                                    <label for="email" class="form-label">Correo Electrónico:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com" required>
                                </div>                      
                            </div>
                        </fieldset>

                        <div class="d-flex justify-content-end modal-footer">
                            <input type="hidden" name="accion" value="actualizar">
                            <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-save"></i> Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

