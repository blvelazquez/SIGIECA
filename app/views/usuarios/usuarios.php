<?php

require_once(__DIR__ . "/../../controllers/usuariosController.php");
$obj = new usuariosController();

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
                <div class="modal-header bg-info text-white">
                    <h5> <strong> Registro Usuarios</strong> </h5>            
                </div>
                <div class="modal-body">
                    <form action="save.php" method="post">
                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-darh">Información Personal</legend>
                            <div class="row">
                                <div class="col">
                                    <label for="fname">Apellido Paterno:</label>
                                    <input type="text" name="fname" id="fname" class="form-control" require>
                                </div>
                                <div class="col">
                                    <label for="lname">Apellido Materno:</label>
                                    <input type="text" name="lname" id="lname" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="name">Nombre:</label>
                                    <input type="text" name="name" id="name" class="form-control" require>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border p-2 mb-3">
                            <legend class="w-auto h6 text-darh">Cuenta</legend>
                            <div class = "row">
                                <div class="col">
                                    <label for="user">Usuario:</label>
                                    <input type="text" name="user", id="user" class="form-control" require>
                                </div>
                                <div class="col">
                                    <label for="pass">Password:</label>
                                    <input type="password" name="pass", id="pass" class="form-control" require>
                                </div>
                                <div class="col">
                                    <label for="email">Correo Electrónico:</label>
                                    <input type="email" name="email", id="email" class="form-control" placeholder="correo@example.com" require>
                                </div>
                            </div>
                        </fieldset>                            
                        <div class="row mb-3">
                            <div class="col">
                                <label for="rol">Rol:</label>
                                <select name="rol" id="rol" class="form-control">
                                    <option value="0">Editor</option>
                                    <option value="1">Consultor</option>
                                    <option value="2">Administrador</option>
                                </select>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

