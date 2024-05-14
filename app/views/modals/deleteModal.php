<!--Modal Usuarios -->
<div class="modal fade" id="deleteModalUsuarios" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="deleteModalLabel">¿Desea Eliminar el Registro Seleccionado?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>Presiona el botón ELIMINAR para borrar definitivamente el registro seleccionado...</p>
            </div>
            <div class="modal-footer">
                <form action="app/views/usuarios/store.php" method='post'>
                    <div>
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="accion" id="accion" value='eliminar'>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-trash"></i> Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal Proveedores -->
<div class="modal fade" id="deleteModalProveedores" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="deleteModalLabel">¿Desea Eliminar el Registro Seleccionado?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>Presiona el botón ELIMINAR para borrar definitivamente el registro seleccionado...</p>
            </div>
            <div class="modal-footer">
                <form action="app/views/proveedores/store.php" method='post'>
                    <div>
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="accion" id="accion" value='eliminar'>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-trash"></i> Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
