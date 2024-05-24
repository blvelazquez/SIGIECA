<?php
    require_once(__DIR__ . "/../../controllers/usuariosController.php");
    $obj = new usuariosController();

    // Dividir la cadena en partes usando el punto como delimitador
    $parts = explode('.', $_GET['id']);
    //print_r($parts);
    $idUsuario = $parts[0];

    $data = $obj->show($idUsuario);
    $resp = $data[0];
    // print_r($resp);
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
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title fs-5"> <strong>Actualizar Usuario</strong></h5>
                </div>
                <div class="modal-body">
                    <form action="app/views/usuarios/store.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $resp['idUsuarios'] ?>">
                        <input type="hidden" name="fechaRegistroUsuario" id="fechaRegistroUsuario" value="<?= $resp['fechaRegistroUsuario'] ?>">
                        <input type="hidden" name="ultimoAccesoUsuario" id="ultimoAccesoUsuario" value="<?= $resp['ultimoAccesoUsuario'] ?>">

                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-dark">Información Personal </legend>
                            <div class="mb-2 row">
                                <div class="col">
                                    <label for="fname" class="form-label">Apellido Paterno:</label>
                                    <input type="text" name="fname" id="fname" class="form-control" value="<?= $resp['apellidoPaternoUsuario'] ?>" require>
                                </div>
                                <div class="col">
                                    <label for="lname" class="form-label">Apellido Materno:</label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="<?= $resp['apellidoMaternoUsuario'] ?>">
                                </div>
                                <div class="col">
                                    <label for="name" class="form-label">Nombre(s):</label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?= $resp['nombreusuario'] ?>" required>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-dark">Cuenta </legend>
                            <div class="mb-2 row">
                                <div class="col">
                                    <label for="user" class="form-label">Usuario:</label>
                                    <input name="user" id="user" class="form-control" value="<?= $resp['loginUsuario'] ?>" required></input>
                                </div>                    
                                <div class="col">
                                    <label for="pass" class="form-label">Password:</label>
                                    <input type="password" name="pass" id="pass" class="form-control" value="<?= $resp['passwordUsuario'] ?>" required></input>
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">Correo Electrónico:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com" value="<?= $resp['email'] ?>" required>
                                </div>                        
                            </div>
                        </fieldset>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="rol" class="form-label">Rol:</label>
                                <select name="rol" id="rol" class="form-control">
                                    <option value="0" <?= $resp['rolUsuario'] == 0 ? 'selected' : '' ?>>Editor</option>
                                    <option value="1" <?= $resp['rolUsuario'] == 1 ? 'selected' : '' ?>>Consultor</option>
                                    <option value="2" <?= $resp['rolUsuario'] == 2 ? 'selected' : '' ?>>Administrador</option>
                                </select>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>

                        <div class="d-flex justify-content-end modal-footer">
                            <input type="hidden" name='accion' id='accion' value='actualizar'>
                            <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-save"></i> Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

