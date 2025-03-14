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
						<li>
    <?php
echo "<a href='PerfilUsuario.php'>Bienvenido Cliente<br>";
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
                       <li><a href="Lasstt-15.php">Productos y/o servicios</a></li>
                         <li class="active"><a href="Lasstt-14.php">Encuesta</a></li>
                      <li><a href="Lasstt-11.php">Cont&aacute;ctanos</a></li>
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
				
				<!--CUERPO-->
				<h1 align="center">¡Califica nuestro sitio web con esta encuesta!</h1><br/>
				<h4 align="center">En la encuesta deber&aacute; contestar todas las preguntas</h4><br/>
				<form action="Enc.php" method="POST" onsubmit="validar()">
					<p align = "justify">
						1.-¿Siempre encuentra sus productos en LASST?<br/>
						<input type="radio" name="prg1" value="Si" required> S&iacute;<br/>
						<input type="radio" name="prg1" value="A veces"> A veces<br/>
						<input type="radio" name="prg1" value="Nunca"> Nunca<br/>
					</p>

					<p align = "justify">
						2.-¿Cree usted que ésta página es segura para guardar su información? (nombres, correo, contrase&ntilde;as...)<br/>
						<input type="radio" name="prg2" value="Confio totalmente" required> Conf&iacute;o totalmente en esta p&aacute;gina<br/>
						<input type="radio" name="prg2" value="No confio"> No estoy segur@<br/>
						<input type="radio" name="prg2" value="No encuentro la informacion necesaria"> No encuentro la informaci&oacute;n necesaria<br/>
					</p>

					<p align = "justify">
						3.-¿Qué tan probable es que vuelvas a comprar en nuestra pagina web?<br/>
						<select name="volver_comprar" required>
							<option></option>
							<option>Poco probable</option>
							<option>Talvez</option>
							<option>Muy probable</option>
						</select>
					</p>

					<p align = "justify">
						4.-¿Ésta página genera errores en tu navegador favorito?<br/>
						<input type="radio" name="prg4" value="Si" required> S&iacute;<br/>
						<textarea name="navegador" rows="3" cols="50" placeholder="Si su respuesta fue si, escriba en cual navegador" maxlength="100"></textarea><br/>			
						<input type="radio" name="prg4" value="No">	No
					</p>

					<p align = "justify">
						5.-En tu opinión, ¿cuáles son las palabras que describen nuestros productos?<br/>
						<input type="radio" id="prg5" name="prg5" value="Alta calidad, excelentes precios, confiable" required> Alta calidad, excelentes precios y confiables <br/>
						<input type="radio" id="prg5" name="prg5" value="Son de buena calidad y con precios regulares"> Buena calidad con precios regulares <br/>
						<input type="radio" id="prg5" name="prg5" value="Mala calidad, malos precios, fragiles"> Mala calidad, malos precios y fragiles
					</p>

					<p align = "justify">
						6.-De una escala al 1 al 10, siendo el 10 la mayor calificaci&oacute;n, ¿usted recomendaría LASST a otras personas?<br/>
						<input type="range" name="rango" min="1" max="10" list="lista-rango" required>
						<datalist id="lista-rango">
						  <option value="1"><option value="2"><option value="3">
						  <option value="4"><option value="5"><option value="6">
						  <option value="7"><option value="8"><option value="9">
						  <option value="10">
						</datalist>
					</p>
					<p align = "justify">
						7.-¿Qué tan seguido busca sus productos en LASST?<br/>
						<select name="menu" required>
						  <option></option>
						  <option>Temporalmente</option>
						  <option>Frecuentemente</option>
						  <option>Muy seguido</option>
						</select>
					</p>
					<p align = "justify">
						8.-¿Tu compra cumplió con tus expectativas?<br/>
						<input type="radio" name="prg8" value="Cumplio mis expectativas" required>S&iacute; cumplio mis expectativas<br/>
						<input type="radio" name="prg8" value="No cumplio expectativas">Me esperaba algo m&aacute;s<br/>
					</p>

					<p align = "justify">
						9.-¿Qu&eacute; métodos prefieres para realizar tu compra?<br/>
						<input type="radio" id="ch10" name="prg9" value="Paypal" required> Por paypal 
						<input type="radio" id="ch11" name="prg9" value="Tarjeta de credito"> Tarjeta de cr&eacute;dito 
						<input type="radio" id="ch12" name="prg9" value="Giro postal"> Giro postal<br/>
						<input type="radio" id="ch13" name="prg9" value="Contrareembolso"> Contrareembolso 
						<input type="radio" id="ch14" name="prg9" value="Tarjeta de debito"> Tarjeta de d&eacute;bito 
						<input type="radio" id="ch15" name="prg9" value="Transferencia bancaria"> Transferencia bancaria
					</p>
					<p align = "justify">
						10.-¿El diseño de la página web es lo suficientemente atractivo como para desear mantenerme en ella?<br/>
						<select name="menu10" required>
						  <option></option>
						  <option>No es atractivo</option>
						  <option>Es poco atractivo</option>
						  <option>Si es atractivo</option>
						</select>
					</p>

					<p align = "justify">
						11.-¿Navegar dentro de ésta página web resulta una experiencia fácil?<br/>
						<input type="radio" name="prg11" value="Resulta facil" required> S&iacute; resulta f&aacute;cil<br/>
						<input type="radio" name="prg11" value="No resulta facil"> Me cuesta un poco<br/>
					</p>

					<p align = "justify">
						12.-¿Cuáles otras informaciones o servicios le gustaría encontrar en ésta página web?<br/>
						<textarea name="infor" placeholder="Escriba -ninguna- sin guiones si todo esta bien" maxlength="200" rows="4" cols="50" required></textarea>
					</p>

					<p align = "justify">
						13.-¿Los procesos de búsquedas de información dentro de ésta página web ocurren de manera rápida?<br/>
						<input type="radio" name="prg13" value="Si" required>S&iacute;<br/>
						<input type="radio" name="prg13" value="Un poco">Un poco<br/>
						<input type="radio" name="prg13" value="No">No
					</p>
	
					<p align = "justify">
						14.-¿Te gustar&iacute;a una gu&iacute;a de como navegar en nuestra p&aacute;gina?<br/>
						<input type="radio" name="prg14" value="Necesito guia" required> ¡Ser&iacute;a genial!<br/>
						<input type="radio" name="prg14" value="No necesito"> No gracias 
					</p>

					<p align = "justify">
						15.-¿Tiene alguna recomendaci&oacute;n y/o comentario sobre esta p&aacute;gina?
					</p>
					<textarea name="coment" rows="4" cols="50" placeholder="Escriba -ninguna- sin guiones si todo esta bien!" maxlength="150" required></textarea><br/>			
					<br/>
					<input type="submit" class="btn btn-success" value="Enviar respuestas" onclick="">
				</form>
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
					  <li><a href="../index.html">Inicio</a></li>
					  <li><a href="../Lasstt-2.html">Historia del sitio</a></li>
					  <li><a href="../Lasstt-3.html">Plataformas web</a></li>
					  <li><a href="../Lasstt-4.html">Servidores web</a></li>
					  <li><a href="../Lasstt-5.html">Maquetación web</a></li>
					  <li><a href="../Lasstt-6.html">Internet de las cosas</a></li>
						<li><a href="../Lasstt-7.html">Información del grupo</a></li>
						<li><a href="../Lasstt-8.html">Glosario</a></li>
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