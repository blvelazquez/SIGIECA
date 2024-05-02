<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEMIF</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Incluye el archivo sb-admin-2.min.css -->
    <link rel="stylesheet" href="assets/css/sb-admin-2.min.css">
    
    <!-- script sections -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    



</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-book-open-reader"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GEMIF<sup>2024 </sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Configuración
            </div>            

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#views/colaboraCarousel/colabora">
                    <i class="fa-regular fa-address-book"></i>
                    <span>Usuarios</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#views/courseCarousel/course">
                    <i class="fa-solid fa-file-signature"></i>
                    <span>Carrusel Materias</span></a>
            </li>            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ejemplo</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Componentes:</h6>
                        <a class="collapse-item" href="app/views/courseCarousel/carousel.php" target="_blank">Materias</a>
                        <a class="collapse-item" href="app/views/colaboraCarousel/carousel.php" target="_blank">Colaboradores</a>
                    </div>
                </div>
            </li>            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>            
        </ul>
        <!-- End of Sidebar -->
    </div>
<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<!-- <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script> -->

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>
</body>
</html>