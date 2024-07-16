<?php 

    // session_start();

    // // Verificar si la sesión está activa
    // if (!isset($_SESSION['usuario'])) {
    //     // Si no hay sesión, redirigir al login
    //     header("Location: app/views/login/login.php");
    //     exit();
    // }

require_once("app/views/headerfooter/header.php");
require_once("app/views/headerfooter/body.php");

?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div id="dynamic-content">
        </div>
        <script>
                // Función para cargar el contenido de la página según la ruta hash
                function loadPageFromHash() {
                    const hash = window.location.hash.slice(1); // Obtiene la parte de la ruta hash sin el #
                    if (hash) {
                        loadPage(hash);
                    }
                }

                // Agrega un evento para cargar la página inicial
                window.addEventListener("DOMContentLoaded", loadPageFromHash);

                // Detectar cambios en la ruta hash
                window.addEventListener("hashchange", loadPageFromHash);

                // Función para cargar el contenido de la página
                function loadPage(pageName) {
                    const dynamicContent = document.getElementById("dynamic-content");
                    const xhr = new XMLHttpRequest();
                    xhr.open("GET", `/sigieca/app/${pageName}.php`, true); // Ruta a la página a cargar
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            dynamicContent.innerHTML = xhr.responseText;
                        }
                    };
                    xhr.send();
                }
                </script>        

    </div>
    
<?php require_once("app/views/modals/deleteModal.php"); ?>
<script>
    $(document).ready(function(){
        $('#deleteModalUsuarios').on('shown.bs.modal', event =>{
            let button = event.relatedTarget;
            let id = button.getAttribute('data-id');
            
            let inputId = $('.modal-footer #id');
            inputId.val(id);
        });

        $('#deleteModalProveedores').on('shown.bs.modal', event =>{
            let button = event.relatedTarget;
            let id = button.getAttribute('data-id');
            
            let inputId = $('.modal-footer #id');
            inputId.val(id);
        });
    });
</script>


<?php require_once("app/views/headerfooter/footer.php")?>

