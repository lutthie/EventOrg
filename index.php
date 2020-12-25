<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Hacienda Torre Fuerte</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- CSS principal -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Fuentes -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
        <!-- PRE LOADER -->
        <div class="preloader">
            <div class="sk-rotating-plane"></div>
        </div>
        <!-- NAV DE ARRIBA -->
        <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
            <div class="container">
                <!-- NOMBRE DE EMPRESA -->
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Hacienda Torre Fuerte</a>
                </div>
                <!-- MENU PRINCIPAL -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#intro" class="smoothScroll">Inicio</a></li>
                        <li><a href="#about" class="smoothScroll">Nosotros</a></li>
                        <li><a href="#venue" class="smoothScroll">Misión y Visión</a></li>
                        <li><a href="#register" class="smoothScroll">Registrate</a></li>
                        <li><a href="#faq" class="smoothScroll">Preguntas Frecuentes</a></li>
                        <li><a href="#contact" class="smoothScroll">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- SECCIÓN INICIO -->
        <section id="intro" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="wow bounceIn" data-wow-delay="0.9s">Salón de eventos</h3>
                        <h1 class="wow fadeInUp" data-wow-delay="1.6s">Hacienda Torre Fuerte</h1>
                        <a href="#about" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">¿Quiénes somos?</a>
                        <a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGÍSTRATE</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SECCIÓN ACERCA DE -->
        <section id="about" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
                        <h3>Hacienda Torre Fuerte</h3>
                        <p>Somos una empresa al servicio de nuestros clientes en el alquiler de espacios para sus eventos como: Reuniones, Bodas, cumpleaños, XV años, Graduaciones, etc. </p>
                        <p>Siempre procuramos brindar un servicio de calidad y personalizado para cada cliente.</p>
                    </div>
                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
                        <img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SECCIÓN DE MISIÓN Y VISIÓN -->
        
        <section id="venue" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8" data-wow-delay="0.9s">
                        <h2>Misión</h2>
                        <p id="misi">Ofrecer a nuestros clientes un servicio personalizado y adaptado a sus necesidades y metas basado en el trabajo en equipo, la eficiencia, la experiencia y sobre todo la calidad en el servicio.</p>
                        <h2>Visión</h2>
                        <p id="visi">Mantener nuestro posicionamiento como empresa referente en el sector de la organización de eventos, partiendo de un trabajo profesional, innovador y a través de la mejora constante de los servicios que ofrecemos.</p>
                        
			</div>
                </div>
            </div>
        </section>
        
        <!---   SECCIÓN DE REGISTRO   --->
        <section id="register" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
                        <h2>COTIZA TU EVENTO HOY</h2>
                        <h3>Registrate, es gratis</h3>
                        <p>Ingresa al sistema, cotiza y selecciona el mobiliario y decoración que mejor se adapte a tu evento.</p>
                        <?php
                        include("php/conexion.php");
                        $con=conectar();
                        echo"Conectado";
                        ?>
                    </div>
                    <div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
                        <form action="indexsql.php" method="POST">
                            <input name="firstname" type="text" class="form-control" id="firstname" required placeholder="Nombre completo">
                            <input name="email" type="email" class="form-control" id="email" required placeholder="Correo electrónico">
                            <input name="password" type="password" class="form-control" id="password" required placeholder="Contraseña">
                            <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                                <input name="submit" type="submit" class="form-control" id="submit" value="REGISTRARSE">
                            </div>
                            <p align="center">Ya tienes una cuenta? <a href ="login/login.php">Inicia Sesión</a></p>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
        
        <!---   SECCIÓN DE CONTACTO   --->
        <section id="contact" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
                        <div class="contact_des">
                            <h4>Contáctenos</h4>
                            <h3>Dirección: Km 25.5 CA-9 SUR, Amatitlán Guatemala</h3>
                            <h3>Telefonos: +502 57228729 / +502 49751600</h3>
                            <h3>Correo: haciendatorrefuerte@gmail.com</h3>
                            <a href="#register" class="btn btn-danger">COTIZA TU EVENTO</a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
                        <div class="contact_detail">
                            <div class="section-title">
                                <h2>¡Mandanos un correo!</h2>
                            </div>
                            <form action="#" method="post">
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Correo electrónico">
                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="Mensaje"></textarea>
                                <div class="col-md-6 col-sm-10">
                                    <input name="submit" type="submit" class="form-control" id="submit" value="ENVIAR">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---   PIE DE PAGINA   --->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2020 EventOrg</p>

				<ul class="social-icon">
					<li><a href="https://www.facebook.com/HaciendaTorreFuerte" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="mailto:haciendatorrefuerte@gmail.com" class="fa fa-envelope-o wow fadeInUp" data-wow-delay="1.3s"></a></li>
				</ul>

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>