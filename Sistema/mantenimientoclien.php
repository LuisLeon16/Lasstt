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

		<link rel="shortcut icon" href="img/Lasstt.ico" />
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
					<li>
	<?php
echo "<a href='#'>Bienvenido Administrador<br>";
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
					  <li style="text-align: rigth;"><a href="Listados.php">Listados</a></li>
                        <li style="text-align: rigth;"><a href="mantenimientoproduc.php">Mantenimientos</a></li>
						<li style="text-align: rigth;"><a href="Diagrama.php">Diagrama E.R</a></li>

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
				    <li><a href="mantenimientoproduc.php">Mantenimientos de Productos</a></li>
					<li><a href="mantenimientouser.php">Mantenimientos de Usuarios</a></li>
					<li class="active"><a href="mantenimientoclien.php">Mantenimientos de Clientes</a></li>
					<li><a href="mantenimientocontac.php">Mantenimientos de Contacto</a></li>
					<li><a href="mantenimientoencues.php">Mantenimientos de Encuesta</a></li>
                        <li style="text-align: rigth;"><a href="Listados.php">Regresar</a></li>
					
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


<?php 
include("Conexion.php");
$sql="Select * from cliente where estado ='A'";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
//echo "Total de nuevos clientes :".$totalfilas."<br>";
	echo "<tr>";
echo "<form action='nuevosclien.php'>";
echo "<td><input type='submit' value='Registrar' class='btn btn-primary' name='btn_registrar'> Total de Clientes :".$totalfilas."<br></td>";
echo "</form><hr>";
	echo "<table border='1' width='100%' height='300px'>";
					echo "<tr><td colspan='19' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA  USUARIOS</center></td></tr>";
					echo "<tr>";
					echo "<td bgcolor='#FFFFFF'> id_cliente</center></td>";
					
					echo "<td bgcolor='#FFFFFF'><center>Nombre</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Apellido</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Contra</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Correo</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Telefono</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Codpostal</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Direccion</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Tarjetacredito</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Fechanac</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Codigocvv</center></td>";
					echo "<td colspan='3'  bgcolor='#FFFFFF'><center> Opciones</center></td>";
					echo "</tr>";
//echo "<tr><td colspan='5'><hr></td></tr>";


while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
	echo "<td><center>".$filas['id_cliente']."</center></td>";
	echo "<td>".$filas['nombre_cliente']."</td>";
	echo "<td>".$filas['apellido_cliente']."</td>";
	echo "<td>".$filas['contra_cliente']."</td>";
	echo "<td>".$filas['correo_cliente']."</td>";
	echo "<td>".$filas['telefono_cliente']."</td>";
	echo "<td>".$filas['codpostal_cliente']."</td>";
	echo "<td>".$filas['direccion_cliente']."</td>";
	echo "<td>".$filas['tarjetacredito_cliente']."</td>";
	echo "<td>".$filas['fechanac_cliente']."</td>";
	echo "<td>".$filas['codigocvv_cliente']."</td>";
	
	


//echo "<form action='consultarprod.php?id_Nproducto=".$filas['id_Nproducto']."'>";
//	echo "<td><input type='submit' value='consultar' class='btn btn-success'</td>";
//		echo "</form>";


//consultar
$ver='window.open("consultarclien.php?id_cliente='.$filas['id_cliente'].'","Detalle", "width=1000, height=400,left=100,top=150,menubar=no,scrollbars=no,fullscreen=no,toolbar=no,status=no");';
echo"<td>&nbsp<a class='btn btn-success' href='#' onclick='".$ver."'>consultar</td>";



//actualizar
echo"<td>&nbsp<a class='btn btn-info' href='editarclien.php?id_cliente=".$filas['id_cliente']."'>Actualizar</td>";


//eliminar
$eli='return confirm("Estas seguro que quieres eliminar este cliente?")';
echo"<td>&nbsp<a class='btn btn-danger' href='eliminarclien.php?id_cliente=".$filas['id_cliente']."'onclick='".$eli."'>Eliminar</td>";




		//echo "<td><input type='submit' value='Eliminar' class='btn btn-danger' name='btn_eliminar'></td>";


	echo "</tr>";


}
echo "</table>";
mysqli_close($conexion);

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
