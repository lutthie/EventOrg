<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Cotizaciones - EventORG
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/form.css">  
        <!-- JS Files -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="getPrecios/total.js"></script>
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
                            <a href="ubicacion.html">
                                <i class="nc-icon nc-compass-05"></i>
                                <p>Ubicación</p>
                            </a>
                        </li>
                        
                        <li class="active">
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
                            <a class="navbar-brand" href="javascript:;">Principal</a>
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
                                    Haz tu pedido ahora
                                </div>
                                <div class="card-body ">
                                    <div id="map" class="map">
                                        <form method="POST" action="panelsql.php">
                                            
                                            <?php
                                            include ("conexion.php");
                                            $con=conectar();
                                            echo "Conectado"; //Quitar después
                                            $query1=mysqli_query($con,"SELECT id_m, material FROM ME");
                                            $query2=mysqli_query($con,"SELECT id_e, tematica FROM EVE");
                                            $query3=mysqli_query($con,"SELECT id_u, nombre_u FROM UBI");
                                            $query4=mysqli_query($con,"SELECT id_mv, empresamv FROM MV");
                                            $query5=mysqli_query($con,"SELECT id_c, comida FROM COM");
                                            //$query5=mysqli_query($con,"SELECT id_usuario, CONCAT(nombre, ' ', apellido) AS name FROM USUARIO_F");
                                            ?>
                                            
                                            <div class="large-group">
                                                
                                                <div class="small-group">
                                                    <label for="id">Código</label>
                                                    <input id="id" type="text" name="id"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="event">Nombre del evento</label>
                                                    <input id="event" type="text" name="event"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="client">Nombre del cliente</label>
                                                    <input id="client" type="text" name="client"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="descrip"></label>
                                                    <input id="descrip" type="hidden" name="descrip"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="date">Fecha del evento</label>
                                                    <input id="date" type="date" name="date"/>
                                                </div>
                                                
                                                <div class="small-group">    
                                                    <label for="hour">Hora del evento (ej. 03:04PM)</label>
                                                    <input id="hour" type="time" name="hour"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="locate">Ubicación</label>
                                                    <select name="locate">
                                                        <?php while($datos = mysqli_fetch_array($query3)){?>
                                                        <option value="<?php echo $datos['id_u']?>"><?php echo $datos['nombre_u']?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="descrip"></label>
                                                    <input id="descrip" type="hidden" name="descrip"/>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="deco">Material de mesas y sillas</label>
                                                    <select name="deco" id="deco">
                                                        <?php while($datos = mysqli_fetch_array($query1)){?>
                                                        <option value="<?php echo $datos['id_m']?>"><?php echo $datos['material']?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <script>
                                                    $(document).ready(function(){
                                                        $('#deco').change(function(){
                                                            var dato = $(this).val();
                                                            //alert(dato);
                                                            
                                                            $.post('getPrecios/material.php', { preme: dato }, function(data){
                                                                
                                                                //alert('valor de retorno: '+data);
                                                                document.getElementById("preme").innerHTML = '<input type="text" disabled="true" id="preme" value ="'+data.trim()+'">';
                                                                
                                                            });
                                                        });
                                                    });
                                                </script>
                                                <div class="small-group">
                                                    <label for="preme">Costo del material</label>
                                                    <div id="preme"><input id="preme" class="monto" name="preme" type="text" disabled="true" onkeyup="sumar();"/></div>
                                                </div>
                                            
                                                <div class="small-group">
                                                    <label for="typee">Tipo de evento</label>
                                                    <select name="typee" id="typee">
                                                        <?php while($datos  = mysqli_fetch_array($query2)){?>
                                                        <option value="<?php echo $datos['id_e']?>"><?php echo $datos['tematica']?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <script>
                                                    $(document).ready(function(){
                                                        $('#typee').change(function(){
                                                            var dato = $(this).val();
                                                            //alert(dato);
                                                            
                                                            $.post('getPrecios/tematica.php', { preve: dato }, function(data){
                                                                
                                                                //alert('valor de retorno: '+data);
                                                                document.getElementById("preve").innerHTML = '<input type="text" disabled="true" id="preve" value ="'+data.trim()+'">';
                                                                
                                                            });
                                                        });
                                                    });
                                                </script>
                                                <div class="small-group">
                                                    <label for="preve">Costo del evento</label>
                                                    <div id="preve"><input id="preve" class="monto" name="preve" type="text" disabled="true" onkeyup="sumar();"/></div>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="food">Menu de comida</label>
                                                    <select name="food" id="food">
                                                        <?php while($datos  = mysqli_fetch_array($query5)){?>
                                                        <option value="<?php echo $datos['id_c']?>"><?php echo $datos['comida']?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <script>
                                                    $(document).ready(function(){
                                                        $('#food').change(function(){
                                                            var dato = $(this).val();
                                                            //alert(dato);
                                                            
                                                            $.post('getPrecios/comida.php', { prefood: dato }, function(data){
                                                                
                                                                //alert('valor de retorno: '+data);
                                                                document.getElementById("prefood").innerHTML = '<input type="text" id="prefood" value ="'+data.trim()+'">';
                                                                
                                                            });
                                                        });
                                                    });
                                                </script>
                                                <div class="small-group">
                                                    <label for="prefood">Costo de la comida</label>
                                                    <div id="prefood"><input id="prefood" class="monto" name="prefood" type="text" disabled="true" onkeyup="sumar();"/></div>
                                                </div>
                                                
                                                <div class="small-group">
                                                    <label for="music">Música</label>
                                                    <select name="music" id="music">
                                                        <?php while($datos  = mysqli_fetch_array($query4)){?>
                                                        <option value="<?php echo $datos['id_mv']?>"><?php echo $datos['empresamv']?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <script>
                                                    $(document).ready(function(){
                                                        $('#music').change(function(){
                                                            var dato = $(this).val();
                                                            //alert(dato);
                                                            
                                                            $.post('getPrecios/musica.php', { premusic: dato }, function(data){
                                                                
                                                                //alert('valor de retorno: '+data);
                                                                document.getElementById("premusic").innerHTML = '<input type="text" disabled="true" id="premusic" value ="'+data.trim()+'">';
                                                                
                                                            });
                                                        });
                                                    });
                                                </script>
                                                <div class="small-group">
                                                    <label for="premusic">Costo de la música</label>
                                                    <div id="premusic"><input id="premusic" class="monto" name="premusic" type="text" disabled="true" onkeyup="sumar();"/></div>
                                                </div>
                                                <script>
                                                    function sumar(){
                                                        var total = 0;
                                                        $("#monto").each(function() {
                                                            if (isNaN(parseInt($(this).val()))) {
                                                                total += 0;
                                                            } else {
                                                                total += parseInt($(this).val());
                                                            }
                                                        });
                                                        //alert(total);
                                                        document.getElementById('total').innerHTML = total;
                                                    }
                                                </script>                                                
                                                <div class="small-group">
                                                    <label for="total">Monto a pagar</label>
                                                    <input id="total" type="text" name="total" />
                                                </div>
                                                
                                                
                                                <input id="submit" class="btn" type="submit" name="submit" value="Enviar"/>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
    </body>
</html>
