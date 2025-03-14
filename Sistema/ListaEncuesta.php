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
						<li><a href="Login.php"><i class="fa fa-user-o"></i>Ingresar</a></li>
					</ul>

					<div style="text-align: rigth;">
				<nav class="m23">
			<ul >
				<li class="submenu">
					<a href="#"><span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
					  <li style="text-align: rigth;"><a href="index.html">Autentificaci&oacute;n</a></li>
					  <li style="text-align: rigth;"><a href="Lasstt-11.html">Cont&aacute;ctanos</a></li>
					  <li style="text-align: rigth;"><a href="Lasstt-12.html">Ingresar Productos/<br>Servicios</a></li>
					  <li style="text-align: rigth;"><a href="Lasstt-13.html">Registrar Clientes/<br>Visitantes</a></li>
					  <li style="text-align: rigth;"><a href="Lasstt-14.html">Encuesta</a></li>
						<li style="text-align: rigth;"><a href="Lasstt-15.html">Productos/<br>Servicios</a></li>
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
				
				<!--CUERPO-->
				<?php
					require("Conexion.php");
					$sql = "Select * from encuesta";
					$consulta = mysqli_query($conexion, $sql);
					echo "<table width='150%' height='300px'>";
					echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA ENCUESTA</center></td></tr>";
					echo "<tr>";
					echo "<td bgcolor='#585858'><center>ID ENCUESTA</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 1</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 2</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 3</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 4</center></td>";
					echo "<td bgcolor='#585858'><center>ERROR NAVEGADOR</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 5</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 6</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 7</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 8</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 9</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 10</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 11</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 12</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 13</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 14</center></td>";
					echo "<td bgcolor='#585858'><center>PREGUNTA 15</center></td>";
					echo "</tr>";
					while($filas = mysqli_fetch_array($consulta))
					{
						echo "<tr>";
						echo "<td><center>".$filas['id_encuesta']."</center></td>";
						echo "<td><center>".$filas['buscarproducto_encuesta']."</center></td>";
						echo "<td><center>".$filas['informacionsegura_encuesta']."</center></td>";
						echo "<td><center>".$filas['probabilidadcompra_encuesta']."</center></td>";
						echo "<td><center>".$filas['errornavegador_encuesta']."</center></td>";
						echo "<td><center>".$filas['navegador4_encuesta']."</center></td>";
						echo "<td><center>".$filas['calidadproducto_encuesta']."</center></td>";
						echo "<td><center>".$filas['escala_encuesta']."</center></td>";
						echo "<td><center>".$filas['tiempobusqueda_encuesta']."</center></td>";
						echo "<td><center>".$filas['expectativas_encuesta']."</center></td>";
						echo "<td><center>".$filas['tipopago_encuesta']."</center></td>";
						echo "<td><center>".$filas['diseno_encuesta']."</center></td>";
						echo "<td><center>".$filas['resultadonavegacion_encuesta']."</center></td>";
						echo "<td><center>".$filas['servicioadicional_encuesta']."</center></td>";
						echo "<td><center>".$filas['procesobusqueda_encuesta']."</center></td>";
						echo "<td><center>".$filas['guianavegacion_encuesta']."</center></td>";
						echo "<td><center>".$filas['recomendacion_encuesta']."</center></td>";
						echo "</tr>";
					}
					echo "</table>";
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
					  <li><a href="Lasstt-1.html">Inicio</a></li>
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
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/Enc.js"></script>

</body>
</html>