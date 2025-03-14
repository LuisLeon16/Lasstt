<?php

session_start();

if(!isset($_SESSION['RolUsuario']))
    {
        header('location:../Login.php');    
    }

if($_SESSION['RolUsuario']==1){
        header('location:Listados.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Las 3 metaetiquetas anteriores deben ir primero en la cabeza; cualquier otro contenido principal debe venir después de estas etiquetas-->

    <title>LASSTT</title>

    <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="../css/style.css"/>

        <link rel="shortcut icon" href="../img/Lasstt.ico" />
</head>

<body>
    <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->         
            <div id="top-header">
                <div class="container">
                    <ul class="header-links pull-left">
                        <li><a href="tel:2256-8945"><i class="fa fa-phone"></i> +503 2256-8945</a></li>
                        <li><a href="mailto:contacto@lasstt.com"><i class="fa fa-envelope-o"></i> contacto@lasstt.com</a></li>
                        <li><a href="https://bit.ly/3hi1sKw" target="_blank"><i class="fa fa-map-marker"></i> Paseo Gral. Escalón 3700, San Salvador</a></li>
                    </ul>
                        <ul class="header-links pull-right">
                        <li><a href="index.html"><i class="fa fa-dollar"></i>USD</a></li>
                        <li>							<?php
								echo "<a href='#'>Bienvenido Cliente<br>";
								echo "Usuario: ".$_SESSION['EmailUsuario']."</a><br>";
								echo "<a href='salir.php'>Cerrar Sesion</a>";
							?></li>
                    </ul>

                    <div style="text-align: rigth;">
                <nav class="m23">
            <ul >
                <li class="submenu">
                    <a href="#"><span class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li style="text-align: rigth;"><a href="Lasstt-15.php">Productos/<br>Servicios</a></li>
                      <li style="text-align: rigth;"><a href="Lasstt-14.php">Encuesta</a></li>
                    <li style="text-align: rigth;"><a href="Lasstt-11.php">Cont&aacute;ctanos</a></li>
            </ul>
        </nav>

    </div></div>

                </div>
            </div>
            <!-- /TOP HEADER -->

<!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="index.html" class="logo">
                                    <img src="./img/logo01.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /LOGO -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->

        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->
		
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- contenedor -->
					<?php
						require("Conexion.php");
						$var = (isset($_POST['prg1']) && !empty($_POST['prg1'])) && (isset($_POST['prg2']) && !empty($_POST['prg2'])) && (isset($_POST['prg4']) && !empty($_POST['prg4'])) &&
								(isset($_POST['prg5']) && !empty($_POST['prg5'])) && (isset($_POST['prg8']) && !empty($_POST['prg8'])) && (isset($_POST['prg9']) && !empty($_POST['prg9'])) &&
								(isset($_POST['prg11']) && !empty($_POST['prg11'])) && (isset($_POST['prg13']) && !empty($_POST['prg13'])) && (isset($_POST['prg14']) && !empty($_POST['prg14']));
						if($var)
						{
							$prg_1 = $_POST['prg1'];$prg_2 = $_POST['prg2'];$prg_3 = $_POST['volver_comprar'];$prg_4 = $_POST['prg4'];$navegador = $_POST['navegador'];
							$prg_5 = $_POST['prg5'];$prg_6 = $_POST['rango'];$prg_7 = $_POST['menu'];$prg_8 = $_POST['prg8'];$prg_9 = $_POST['prg9'];
							$prg_10 = $_POST['menu10'];$prg_11 = $_POST['prg11'];$prg_12 = $_POST['infor'];$prg_13 = $_POST['prg13'];$prg_14 = $_POST['prg14'];
							$prg_15 = $_POST['coment'];
						}else{
							header("Location: Lasstt-14.php");
						}
						$sql = "insert into encuesta (buscarproducto_encuesta , informacionsegura_encuesta , probabilidadcompra_encuesta , errornavegador_encuesta , navegador4_encuesta , calidadproducto_encuesta , escala_encuesta , tiempobusqueda_encuesta , expectativas_encuesta , tipopago_encuesta , diseno_encuesta , resultadonavegacion_encuesta , servicioadicional_encuesta , procesobusqueda_encuesta , guianavegacion_encuesta , recomendacion_encuesta )
						values('$prg_1', '$prg_2', '$prg_3', '$prg_4', '$navegador', '$prg_5', $prg_6, '$prg_7', '$prg_8', '$prg_9', '$prg_10', '$prg_11', '$prg_12', '$prg_13', '$prg_14', '$prg_15')";
						$res = mysqli_query($conexion, $sql);
						if($res){
							echo "<h1><center>Sus respuestas fueron almacenadas correctamente</center></h1><br/>";
							echo "<center><img src='../img/finEnc.jpg' width='610' height='380' alt='Gracias por tu colaboracion' title='Imagen referente a un texto'/></center>";
							echo "<br/><center><h4><a href='Lasstt-14.php'>Clic aqui para continuar</a></h4></center>";
						}
						else{
							echo "Error con la insercion de datos <br/>";
							echo "<a href='Lasstt-14.php'>Continuar</a>";
						}	
					?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

			<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nosotros</h3>
							  <p>LASSTT fue fundado a principios del 2020; su nombre se ha convertido en sinónimo de calidad, experiencia y solidez, así como de atención especializada al cliente. A la fecha cuenta con 10 tiendas a nivel nacional. Maneja actualmente las mejores marcas internacionales, posicionandose como una de las mejores empresas en su rama.<br></br></p>
								<ul class="footer-links">
									<li><a href="https://bit.ly/3hi1sKw" target="_blank"><i class="fa fa-map-marker"></i>Paseo Gral. Escalón 3700, San &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salvador</a></li>
									<li><a href="tel:2256-8945"><i class="fa fa-phone"></i>+503 2256-8945</a></li>
									<li><a href="mailto:contacto@lasstt.com"><i class="fa fa-envelope-o"></i>contacto@lasstt.com</a></li>
								</ul>
								<ul class="header-links pull-right">
								<li>
									</br>
									<a href="https://www.facebook.com/Lasstt-107011354456393" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/Lasstt2" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/lasstt2/" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorías</h3>
								<ul class="footer-links">
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Accesorios</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
					  <li><a href="index.html">Inicio</a></li>
					  <li><a href="Lasstt-2.html">Historia del sitio</a></li>
					  <li><a href="Lasstt-3.html">Plataformas web</a></li>
					  <li><a href="Lasstt-4.html">Servidores web</a></li>
					  <li><a href="Lasstt-5.html">Maquetación web</a></li>
					  <li><a href="Lasstt-6.html">Internet de las cosas</a></li>
						<li><a href="Lasstt-7.html">Información del grupo</a></li>
						<li><a href="Lasstt-8.html">Glosario</a></li>	
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicios</h3>
								<ul class="footer-links">
									<li><a href="#">Mi Cuenta</a></li>
									<li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<p align="center">&copy; Copyright 2020 by <a href="index.html">LASSTT</a> ·  All Rights reserved  ·  contacto@lasstt.com</p>
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
		
				<!-- jQuery Plugins -->
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/Enc.js"></script>

</body>
</html>