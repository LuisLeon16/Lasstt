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
						<li>	<?php
echo "<a href='PerfiAdmin.php'>Bienvenido Administrador<br>";
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
					<ul class="main-nav nav navbar-nav">
				 <li><a href="Listados.php">Listados</a></li>
                        <li><a href="mantenimientoproduc.php">Mantenimientos</a></li>
                         <li class="active"><a href="detalle.php">Mantenimientos de Compras</a></li>
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
				
				<!--CUERPO
<form action='buscar_user.php' method="get" class="form_search">
<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">

<input type="submit" value="Buscar" class="btn btn-success">
</form>-->
                
               
                
        
              <a href="BuscarFACTURA.php" class="btn btn-info">Buscar Listado de Facturas</a>
          <br><br><br>
                
<?php 
include("Conexion.php");
$sql="Select * from pago where Estado='A'";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
//echo "Total de nuevos clientes :".$totalfilas."<br>";
	echo "<tr>";
echo "<form action='Listados.php'>";
echo "<td>FACTURAS  :".$totalfilas."<br></td>";
echo "</form><hr>";
	echo "<table border='1' width='100%' height='450px'>";
					echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE FACTURAS</center></td></tr>";
					echo "<tr>";
					echo "<th bgcolor='#FFFFFF'><center>Codigo de compra</center></th>";
				
					echo "<th bgcolor='#FFFFFF'><center>Codigo Cliente</center></th>";
					echo "<th bgcolor='#FFFFFF'><center>Banco</center></th>";
					echo "<th bgcolor='#FFFFFF'><center>Tipo Tarjeta</center></th>";
					echo "<th bgcolor='#FFFFFF'><center>Fecha</center></th>";
					
                
				echo "<th colspan='3'  bgcolor='#FFFFFF'><center> Opciones</center></th>";
					echo "</tr>";
//echo "<tr><td colspan='5'><hr></td></tr>";


while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
	echo "<td><center>".$filas['id']."</center></td>";
	
	echo "<td><center>".$filas['id_suario']."</center></td>";
	
	echo "<td><center>".$filas['banco_e']."</center></td>";
	echo "<td><center>".$filas['tipo_tj']."</center></td>";
    echo "<td><center>".$filas['fecha_compra']."</center></td>";
	
	


//echo "<form action='consultarprod.php?id_Nproducto=".$filas['id_Nproducto']."'>";
//	echo "<td><input type='submit' value='consultar' class='btn btn-success'</td>";
//		echo "</form>";


         
    
//consultar
$ver='window.open("detalleFACTURA.php?id='.$filas['id'].'","Detalle", "width=900, height=600,left=100,top=150,menubar=no,scrollbars=no,fullscreen=no,toolbar=no,status=no");';
echo"<center><td>&nbsp<a class='btn btn-success' href='#' onclick='".$ver."'>consultar</center></td>";


echo"<td>&nbsp<a class='btn btn-primary' href='editarFACTURA.php?id=".$filas['id']."'>Actualizar</td>";


//ElIMINAR
	$eli='return confirm("Estas seguro que quieres eliminar esta factura?")';
echo"<td>&nbsp<a class='btn btn-danger' href='eliminarFACTURA.php?id=".$filas['id']."'onclick='".$eli."'>Eliminar</td>";

	echo "</tr>";


}
echo "</table>";
mysqli_close($conexion);

?>

                
                
<?php 
include("Conexion.php");
$sql="Select * from detallepago";
$consulta=mysqli_query($conexion,$sql);

$totalfilas=mysqli_num_rows($consulta);
//echo "Total de nuevos clientes :".$totalfilas."<br>";
	echo "<tr>";
echo "<form action='Listados.php'>";
echo "<td>Productos comprados  :".$totalfilas."<br></td>";
echo "</form><hr>";


	echo "<table border='1' width='100%' height='450px'>";
					echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA  Productos comprados</center></td></tr>";
					echo "<tr>";
					echo "<th bgcolor='#FFFFFF'>id</center></th>";
				
					echo "<th bgcolor='#FFFFFF'><center>id_compra</center></th>";
					echo "<th bgcolor='#FFFFFF'><center>nom_producto</center></th>";
					echo "<th bgcolor='#FFFFFF'><center>precio</center></th>";
					echo "<th bgcolor='#FFFFFF'><center>cantidad</center></th>";
					
                
				echo "<th colspan='1'  bgcolor='#FFFFFF'><center> Opciones</center></th>";
					echo "</tr>";
//echo "<tr><td colspan='5'><hr></td></tr>";


while ($filas=mysqli_fetch_array($consulta)) {
	echo "<tr>";
	echo "<td>".$filas['id']."</td>";
	
	echo "<td>".$filas['id_compra']."</td>";
	
	echo "<td>".$filas['nom_producto']."</td>";
	echo "<td>".$filas['precio']."</td>";
    echo "<td><center>".$filas['cantidad']."</center></td>";
	
	


//echo "<form action='consultarprod.php?id_Nproducto=".$filas['id_Nproducto']."'>";
//	echo "<td><input type='submit' value='consultar' class='btn btn-success'</td>";
//		echo "</form>";


//consultar
$ver='window.open("detalleprod.php?id='.$filas['id'].'","Detalle", "width=1000, height=500,left=100,top=150,menubar=no,scrollbars=no,fullscreen=no,toolbar=no,status=no");';
echo"<td>&nbsp<a class='btn btn-success' href='#' onclick='".$ver."'>consultar</td>";





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

        <script type="text/javascript" src="jquery.minn.js"></script>
		<script type="text/javascript" src="mainn.js"></script>
</body>
</html>
