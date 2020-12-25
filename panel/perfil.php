<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Perfil - EventORG
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/form.css">  
    </head>
    
    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <!-- LOGOTIPO -->
                <div class="logo">
                    <a href="#" class="simple-text logo-mini">
                        <div class="logo-image-small">
                            <img src="./assets/img/logo-small.png">
                        </div> 
                        <p>CT</p> 
                    </a>
                    <a href="#" class="simple-text logo-normal">
                        Event ORG
                    </a>
                </div>
                <!-- FIN DE LOGOTIPO -->
                <!-- MENU -->
                <div class="sidebar-wrapper" id="menu">
                    <ul class="nav">
                        
                        <li>
                            <a href="eventos.php">
                                <i class="nc-icon nc-diamond"></i>
                                <p>Eventos</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="comida.php">
                                <i class="nc-icon nc-basket"></i>
                                <p>Comida</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="calendario.php">
                                <i class="nc-icon nc-calendar-60"></i>
                                <p>Calendario</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="ubicacion.php">
                                <i class="nc-icon nc-compass-05"></i>
                                <p>Ubicación</p>
                            </a>
                        </li>
                        
                        <li >
                            <a href="panel.php">
                                <i class="nc-icon nc-satisfied"></i>
                                <p>Cotizaciones</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- FIN DE MENU -->
            </div>
            <div class="main-panel" style="height: 100vh;">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                    <div class="container-fluid">
                        <!-- TITULO -->
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Prueba">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="javascript:;">Perfil</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <!-- BOTON DE CUENTA -->
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item btn-rotate dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="nc-icon nc-single-02"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Perfil de la cuenta</span>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="perfil.php">Cuenta</a>
                                        <a class="dropdown-item" href="#">Soporte técnico</a>
                                        <a class="dropdown-item" href="#">Cerrar sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    Confiuración de perfil
                                </div>
                                <div class="card-body ">
                                    <div id="map" class="map">
                                        <h1>Bienvenido <?php echo $user->getNombre(); ?> </h1>

                                        <?php
                                        include ("conexion.php");
                                        $con=conectar();
                                        echo "Conectado";
                                        ?>
                                        <form method="POST">
                                            <div class="large-group">
                                                
                                                <div class="small-group">
                                                    <label for="nombre">Nombre</label>
                                                    <input id="nombre" type="text" name="nombre"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="apellido">Apellido</label>
                                                    <input id="apellido" type="text" name="apellido"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="email">Correo electrónico</label>
                                                    <input id="email" type="email" name="email"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="phone">Teléfono</label>
                                                    <input for="phone" type="numeric" name="phone"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="adres">Dirección</label>
                                                    <input id="adres" type="text" name="adres"/>
                                                </div>
                                                
                                                <input id="submit" class="btn" type="submit" name="submit" value="Guardar Perfil"/>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js"></script>
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Chart JS -->
        <script src="./assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="./assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    </body>
</html>
