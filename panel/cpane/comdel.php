<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Catálogo de eventos - EventORG
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/form.css"> 
    </head>
    
    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <!-- LOGOTIPO -->
                <div class="logo">
                    <a href="#" class="simple-text logo-mini">
                        <div class="logo-image-small">
                            <img src="../assets/img/logo-small.png">
                        </div> 
                        <p>CT</p> 
                    </a>
                    <a href="#" class="simple-text logo-normal">
                        Event ORG
                    </a>
                </div>
                <!-- FIN DE LOGOTIPO -->
                <!-- MENU -->
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        
                        <li>
                            <a href="eveins.php">
                                <i class="nc-icon nc-diamond"></i>
                                <p>Eventos</p>
                            </a>
                        </li>
                        
                        <li class="active">
                            <a href="comins.php">
                                <i class="nc-icon nc-basket"></i>
                                <p>Comida</p>
                            </a>
                        </li>
                        <!--
                        <li>
                            <a href="calendario.php">
                                <i class="nc-icon nc-calendar-60"></i>
                                <p>Calendario</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="ubicacion.html">
                                <i class="nc-icon nc-compass-05"></i>
                                <p>Ubicación</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="panel.php">
                                <i class="nc-icon nc-satisfied"></i>
                                <p>Cotizaciones</p>
                            </a>
                        </li>
                        -->
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
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="javascript:;">Eventos</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                            </button>
                        </div>
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
                            <div class="card card-plain">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="places-buttons">
                                            <div class="row">
                                                <div class="col-md-6 ml-auto mr-auto text-center">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 ml-auto mr-auto">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <button class="btn btn-primary btn-block" onclick="location.href = 'comins.php'">Insertar</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button class="btn btn-primary btn-block" onclick="location.href = 'comdel.php'">Eliminar</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button class="btn btn-primary btn-block" onclick="location.href = 'comod.php'">Modificar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="comdelsql.php">                                 
                                    <?php
                                    include ("conexion.php");
                                    $con=conectar();
                                    echo "Conectado"; //Quitar después
                                    
                                    ?>
                                    
                                    <div class="large-group">
                                        <div class="small-group">
                                            <label for="id">Código de comida a eliminar</label>
                                            <input id="id" type="text" name="id"/>
                                        </div>
                                        
                                        <input id="submit" class="btn" type="submit" name="submit" value="Borrar"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Chart JS -->
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    </body>
</html>
