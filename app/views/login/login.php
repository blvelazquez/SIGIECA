<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard SIGIECA</title>

    <link href="../../../assets/css/sigieca.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" class="bg-body-secondary">

    <div class="container-fluid">
        <section class="gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                        
                            <form action="../login/store.php" method="post" enctype="multipart/form-data">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Por favor ingrese su Usuario y Contraseña!</p>
                
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="text" name="usuario" id="usuario" class="form-control form-control-lg" />
                                    <label class="form-label" for="usuario">Usuario</label>
                                </div>
                
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <input type="password" name= "password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Contraseña</label>
                                </div>
                
                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Recuperar Contraseña?</a></p>
                
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            </form>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <div>
                        <p class="mb-0">No tienes Cuenta? <a href="#!" class="text-white-50 fw-bold">Resgistrate</a>
                        </p>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>