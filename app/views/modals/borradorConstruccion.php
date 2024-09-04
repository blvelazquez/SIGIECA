<!--Modal Usuarios -->
<div class="modal fade" id="borradorModalConstruccion" tabindex="-1" aria-labelledby="borradorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="borradorModalLabel">Guardar Borrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>La información sera guardada pero puedes seguir editando la información...</p>
            </div>
            <div class="modal-footer">
                <form action="app/views/usuarios/store.php" method='post'>
                    <div>
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="accion" id="accion" value=''>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-trash"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>