<?php

session_start();

if(!isset($_SESSION['RolUsuario']))
	{
		header('location:../Login.php');    
	}

if($_SESSION['RolUsuario']==2){
		header('location:Lasstt-15.php');
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
				<script src="js/Ingreso.js"></script>
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
						<li>	<?php
echo "<a href='#'>Bienvenido Administrador<br>";
echo "Usuario: ".$_SESSION['EmailUsuario']."</a><br>";
echo "<a href='salir.php'>Cerrar Sesion</a>";
?></li>
					</ul>

					<div style="text-align: rigth;">
		

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
				


<h1>Insertar nuevos datos</h1><hr>

<form action='mantenimientoencues.php'>
	<input type="submit" value="Regresar" class="btn btn-success">
		</form>
	<form  method="POST" name="form-work" action="guardarencues.php">
                    

                   
                               <fieldset>

                 
                             
										<div class="form-group">
											 <div class="col-md-6">
     							   			<label for="buscarpr">buscarproducto</label>
        									<input type="text" name="buscarpr" class="form-control"required placeholder="Tu buscarproducto" id="buscarpr">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="informac">informacionsegura</label>
        									<input type="text" name="informac" class="form-control"required placeholder="Tu informacion segura" id="informac">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="probabil">probabilidadcompra</label>
        									<input type="text" name="probabil" class="form-control"required placeholder="Tu probabilidad" id="probabil">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="errornav">errornavegador</label>
        									<input type="text" name="errornav" class="form-control"required placeholder="Tu errornav" id="errornav">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="navegador">navegador4</label>
        									<input type="text" name="navegador" class="form-control"required placeholder="Tu navegador" id="navegador">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="calidadpr">calidadproducto</label>
        									<input type="text" name="calidadpr" class="form-control"required placeholder="Tu calidadpr" id="calidadpr">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="escala_en">escala</label>
        									<input type="text" name="escala_en" class="form-control"required placeholder="Tu escala_en" id="escala_en">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="tiempobus">tiempobusqueda</label>
        									<input type="text" name="tiempobus" class="form-control"required placeholder="Tu tiempobus" id="tiempobus">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="expectati">expectativas</label>
        									<input type="text" name="expectati" class="form-control"required placeholder="Tu expectati" id="expectati">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="tipopago">tipopago</label>
        									<input type="text" name="tipopago" class="form-control"required placeholder="Tu tipopago" id="tipopago">
  										  </div>
  										  </div>

  										  	 <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="diseno">diseno</label>
        									<input type="text" name="diseno" class="form-control"required placeholder="Tu diseno" id="diseno">
  										  </div>
  										  </div>

											 <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="resultadona">resultadonavegacion</label>
        									<input type="text" name="resultadona" class="form-control"required placeholder="Tu resultadona" id="resultadona">
  										  </div>
  										  </div>

											 <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="servicioadi">servicioadicional</label>
        									<input type="text" name="servicioadi" class="form-control"required placeholder="Tu servicioadi" id="servicioadi">
  										  </div>
  										  </div>

										 <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="procesobusq">procesobusqueda</label>
        									<input type="text" name="procesobusq" class="form-control"required placeholder="Tu proceso busqueda" id="procesobusq">
  										  </div>
  										  </div>

 											<div class="form-group">
											 <div class="col-md-6">
     							   			<label for="guianavegaci">guianavegacion</label>
        									<input type="text" name="guianavegaci" class="form-control"required placeholder="Tu guia" id="guianavegaci">
  										  </div>
  										  </div>

  										  	<div class="form-group">
											 <div class="col-md-6">
     							   			<label for="recomendacio">recomendacion</label>
        									<input type="text" name="recomendacio" class="form-control"required placeholder="Tu recomendacion" id="recomendacio">
  										  </div>
  										  </div>


                          
                                    <div class="form-group">
                                      <div class="col-md-12">
                                           <br>   <br>	
                                        <!--/<button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>-->
                                        <center><input type="submit" value="Registrar" class="btn btn-primary" name="btn_registrar" onclick="myFunction()"></center>
                                         <script>
function myFunction() {
  alert("Registrado con exito");
}
</script>
                                      </div>
                                    </div>     
                                </fieldset>
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