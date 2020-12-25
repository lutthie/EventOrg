<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Catálogo de menu - EventORG
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="./assets/demo/demo.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
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
                            <a href="eventos.php">
                                <i class="nc-icon nc-diamond"></i>
                                <p>Eventos</p>
                            </a>
                        </li>
                        
                        <li class="active">
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
                            <a class="navbar-brand" href="javascript:;">Catálogo de menus disponibles</a>
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
                            <div class="card card-plain">
                                <?php
                                include ("conexion.php");
                                $con=conectar();
                                $query = "SELECT * FROM com";
                                $resultado=$con->query($query);
                                ?>
                                <div class="card-header">
                                    <h4 class="card-title">Menu de comida</h4>
                                    <p class="card-category">Selecciona la comida que desees.</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Menu</th>
                                                <th>No.  de personas</th>
                                                <th>Tipo de comida</th>
                                                <th>Acompañamiento</th>
                                                <th>Bebida</th>
                                                <th>Empresa</th>
                                                <th class="text-right">Pago</th>
                                            </thead>
                                            
                                            <tbody>
                                                <?php while($row=$resultado->fetch_assoc()){ ?>
                                                <tr>
                                                    <td><?php echo $row['comida'] ?></td>
                                                    <td><?php echo $row['cantidad_persona'] ?></td>
                                                    <td><?php echo $row['tipo_comida'] ?></td>
                                                    <td><?php echo $row['acompañamiento'] ?></td>
                                                    <td><?php echo $row['bebida'] ?></td>
                                                    <td><?php echo $row['empresa'] ?></td>
                                                    <td class="text-right"><?php echo $row['monto'] ?></td>
                                                </tr>
                                                <?php  } ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Fotos -->
                            <div class="col-xs-6 col-xs-offset-3 tamano" >
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicadores -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                        <li data-target="#myCarousel" data-slide-to="4"></li>
                                        <li data-target="#myCarousel" data-slide-to="5"></li>
                                        <li data-target="#myCarousel" data-slide-to="6"></li>
                                        <li data-target="#myCarousel" data-slide-to="7"></li>
                                        <li data-target="#myCarousel" data-slide-to="8"></li>
                                        <li data-target="#myCarousel" data-slide-to="9"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="img/comida/Diapositiva1.PNG" alt="ev1" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva2.PNG" alt="ev2" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva3.PNG" alt="ev3" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva4.PNG" alt="ev4" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva5.PNG" alt="ev5" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva6.PNG" alt="ev6" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva7.PNG" alt="ev7" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva8.PNG" alt="ev8" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="img/comida/Diapositiva9.PNG" alt="ev9" class="img-responsive">
                                        </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Fin Fotos -->
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
