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
					<li>
	<?php
echo "<a href='PerfiAdmin.php'>Bienvenido Administrador<br>";
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
                         <li style="text-align: rigth;"><a href="detalle.php">Mantenimientos de Compras</a></li>
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
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
					  <li class="active"><a href="Listados.php">Listados</a></li>
                        <li><a href="mantenimientoproduc.php">Mantenimientos</a></li>
                         <li><a href="detalle.php">Mantenimientos de Compras</a></li>
						<li><a href="Diagrama.php">Diagrama E.R</a></li>
						<li><a href="Reporteria.php">Reporteria y Gráficos</a></li>
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
				


<center><h1>Listado de Tablas</h1><hr></center>

<h2>Tabla Contacto</h2><hr>

     <?php 
include("Conexion.php");

$sql="Select * from contacto";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
echo "Total de nuevos contactos :".$totalfilas."<br>";
echo "<table class='table table-striped' border='1' width='100%' height='65px'>";
echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA  CONTACTOS </center></td></tr>";
echo "<tr>";
echo "<td bgcolor='#FFFFFF'><center>Nombre</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Correo</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Telefono</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Asunto</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Mensaje</center></td>";

echo "</tr>";
while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
		echo "<td>".$filas['nombre_contacto']."</td>";
	echo "<td>".$filas['correo_contacto']."</td>";
	echo "<td>".$filas['telefono_contacto']."</td>";
	echo "<td>".$filas['asunto_contacto']."</td>";
	echo "<td>".$filas['mensaje_contacto']."</td>";
	echo "</tr>";


}
echo "</table>";
mysqli_close($conexion);
?>
<br>
<br><br><br>
<h2>Tabla Usuarios</h2><hr>
<?php 
include("Conexion.php");

$sql="Select * from usuario";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
echo "Total de nuevos Usuarios :".$totalfilas."<br>";
echo "<table class='table table-striped' border='1' width='100%' height='65px'>";
echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA  USUARIOS </center></td></tr>";
echo "<tr>";
echo "<td bgcolor='#FFFFFF'><center>RolUsuario </center></td>";
echo "<td bgcolor='#FFFFFF'><center>NombreUsuario</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Contrasena</center></td>";
echo "<td bgcolor='#FFFFFF'><center>EmailUsuario</center></td>";
echo "<td bgcolor='#FFFFFF'><center>apellidos_usuario</center></td>";
echo "<td bgcolor='#FFFFFF'><center>codigoPos_usuario</center></td>";
echo "<td bgcolor='#FFFFFF'><center>telefono_usuario</center></td>";
echo "<td bgcolor='#FFFFFF'><center>direccion_usuario</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Estado</center></td>";

echo "</tr>";

while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
	echo "<td>".$filas['RolUsuario']."</td>";
	echo "<td>".$filas['NombreUsuario']."</td>";
	echo "<td>".$filas['Contrasena']."</td>";
	echo "<td>".$filas['EmailUsuario']."</td>";
	echo "<td>".$filas['apellidos_usuario']."</td>";
	echo "<td>".$filas['codigoPos_usuario']."</td>";
	echo "<td>".$filas['telefono_usuario']."</td>";
	echo "<td>".$filas['direccion_usuario']."</td>";
		echo "<td><center>".$filas['Estado']."</center></td>";
	echo "</tr>";


}
echo "</table>";
mysqli_close($conexion);
?>
<br><br><br>
	<h2>Tabla Encuestas</h2><hr>
<?php 
include("Conexion.php");

$sql="Select * from encuesta";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
echo "Total de registros en encuestas :".$totalfilas."<br>";
	echo "<table class='table table-striped' border='1' width='100%' height='65px'>";
					echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA  ENCUESTA</center></td></tr>";
					echo "<tr>";
echo "<td bgcolor='#FFFFFF'><center>P.1</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.2</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.3</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.4</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.5 y P.6 (Razón si falla)</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.7</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.8</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.9</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.10</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.11</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.12</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.13</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.14</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.15</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.16</center></td>";
echo "<td bgcolor='#FFFFFF'><center>P.17</center></td>";
					echo "</tr>";


while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
	echo "<td>".$filas['id_encuesta']."</td>";
	echo "<td>".$filas['buscarproducto_encuesta']."</td>";
	echo "<td>".$filas['informacionsegura_encuesta']."</td>";
	echo "<td>".$filas['probabilidadcompra_encuesta']."</td>";
	echo "<td>".$filas['errornavegador_encuesta']." ".$filas['navegador4_encuesta']."</td>";
	echo "<td>".$filas['calidadproducto_encuesta']."</td>";
	echo "<td>".$filas['escala_encuesta']."</td>";
	echo "<td>".$filas['tiempobusqueda_encuesta']."</td>";
	echo "<td>".$filas['expectativas_encuesta']."</td>";
	echo "<td>".$filas['tipopago_encuesta']."</td>";
	echo "<td>".$filas['diseno_encuesta']."</td>";
	echo "<td>".$filas['resultadonavegacion_encuesta']."</td>";
	echo "<td>".$filas['servicioadicional_encuesta']."</td>";
	echo "<td>".$filas['procesobusqueda_encuesta']."</td>";
	echo "<td>".$filas['guianavegacion_encuesta']."</td>";
	echo "<td>".$filas['recomendacion_encuesta']."</td>";
	echo "</tr>";


}
echo "</table>";
mysqli_close($conexion);
?>
<br><br><br>

<h2>Tabla de Productos</h2><hr>
<?php 
include("Conexion.php");
$sql="Select * from productos";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
echo "Total de productos :".$totalfilas."<br>";
	echo "<table class='table table-striped' border='1' width='100%' height='65px'>";
					echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA PRODUCTOS</center></td></tr>";
					echo "<tr>";
					echo "<td bgcolor='#FFFFFF'><center>Nombre producto</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Existencias</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Precio</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>foto</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Estado</center></td>";
					echo "</tr>";

while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
	echo "<td>".$filas['producto']."</td>";
	echo "<td>".$filas['existencia']."</td>";
	echo "<td>".$filas['precio']."</td>";
	echo "<td><center><img src='foto/".$filas['foto']."'width=100' height='100' alt''</center></td>";
		echo "<td><center>".$filas['Estado']."</center></td>";
	echo "</tr>";


}
echo "</table>";
mysqli_close($conexion);

?>

<br><br><br>

<h2>Tabla de Nuevos Productos</h2><hr>
<?php 
include("Conexion.php");
$sql="Select * from nuevosproductos";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
echo "Total de nuevos productos :".$totalfilas."<br>";
	echo "<table class='table table-striped' border='1' width='100%' height='65px'>";
					echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA NUEVOS PRODUCTOS</center></td></tr>";
					echo "<tr>";
					echo "<td bgcolor='#FFFFFF'><center>nombre_Nproducto</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>precio_Nproducto</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>cantidad_Nproducto</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>caracteristica_Nproducto</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>foto</center></td>";
					echo "<td bgcolor='#FFFFFF'><center>Estado</center></td>";
					echo "</tr>";

while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
	echo "<td>".$filas['nombre_Nproducto']."</td>";
	echo "<td>".$filas['precio_Nproducto']."</td>";
	echo "<td>".$filas['cantidad_Nproducto']."</td>";
	echo "<td>".$filas['caracteristica_Nproducto']."</td>";
	echo "<td><center><img src='foto/".$filas['imagen']."'width=100' height='100' alt''</center></td>";
		echo "<td><center>".$filas['Estado']."</center></td>";
	echo "</tr>";


}
echo "</table>";
mysqli_close($conexion);

?>

<br><br><br>
<h2>Tabla Clientes</h2><hr>
<?php 
include("Conexion.php");

$sql="Select * from cliente";
$consulta=mysqli_query($conexion,$sql);


$totalfilas=mysqli_num_rows($consulta);
echo "Total de nuevos clientes :".$totalfilas."<br>";
echo "<table class='table table-striped' border='1' width='100%' height='105px'>";
echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA CLIENTES</center></td></tr>";
echo "<tr>";
echo "<td bgcolor='#FFFFFF'> id_cliente</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Nombre</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Apellido</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Password</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Correo</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Telefono</center></td>";
echo "<td bgcolor='#FFFFFF'><center>CodPostal</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Direccion</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Tarjeta</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Fecha_Nacimiento</center></td>";
echo "<td bgcolor='#FFFFFF'><center>codigocvv</center></td>";
echo "<td bgcolor='#FFFFFF'><center>Estado</center></td>";
/*echo "<td bgcolor='#008000'><font color='#FFFFFF'><center>Modificar</center></font></td>";
echo "<td bgcolor='#800000'><font color='#FFFFFF'><center>Eliminar</center></font></td>";*/
echo "</tr>";

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
	echo "<td><center>".$filas['Estado']."</center></td>";
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
