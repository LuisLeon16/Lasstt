<?php

	session_start();

	if(!isset($_SESSION['RolUsuario']))
    {
        header('location:../Login.php');    
    }

	if($_SESSION['RolUsuario'] == 1){
        header('location:Listados.php');
    }

    $idUser=$_SESSION["id"];

	require("Conexion.php");
	$perfil = mysqli_query($conexion, "SELECT * FROM usuario WHERE RolUsuario = 2 AND id='".$_SESSION['id']."'");
	$filas = mysqli_fetch_array($perfil);	
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
						<li><a href="#"><i class="fa fa-dollar"></i>USD</a></li>
						<li>
							<?php
								echo "<a href='PerfilUsuario.php'>Bienvenido Cliente<br>";
echo "Usuario: ".$_SESSION['EmailUsuario']."</a><br>";
echo "<a href='HistoryCompra.php'>Mis Compras</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='salir.php'>Cerrar Sesion</a>";
							?>
						</li>
					</ul>

					<div style="text-align: rigth;">
				<nav class="m23">
			<ul>
				<li class="submenu">
					<a href="#"><span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li style="text-align: rigth;"><a href="Lasstt-15.php">Productos/<br>Servicios</a></li>
						<li style="text-align: rigth;"><a href="Lasstt-14.php">Encuesta</a></li>
						<li style="text-align: rigth;"><a href="Lasstt-11.php">Cont&aacute;ctanos</a></li>
					</ul>
				</li>
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
					    <li class="active"><a href="javascript: history.go(-1)">VOLVER</a></li> 
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		
		<?php
		
			echo "<div class = 'section'>";
				echo "<div class = 'container'>";
					echo "<div class = 'row'>";
						
							
						echo "<table class='table table-striped' border='1' width='100%' height='65px'>";
						echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>INFORMACION PERSONAL</center></td></tr>";
						echo "<tr>";
							echo "<td bgcolor='#FFFFFF'><center>Nombre completo</center></td>";
							echo "<td bgcolor='#FFFFFF'><center>Correo electronico</center></td>";
							echo "<td bgcolor='#FFFFFF'><center>Contrase&ntilde;a</center></td>";
							echo "<td bgcolor='#FFFFFF'><center>Codigo postal</center></td>";
                        							echo "<td bgcolor='#FFFFFF'><center>Numero de telefono</center></td>";
							echo "<td bgcolor='#FFFFFF'><center>Direccion</center></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>".$filas['NombreUsuario']." ".$filas['apellidos_usuario']."</td>";
							echo "<td>".$filas['EmailUsuario']."</td>";
							echo "<td>".$filas['Contrasena']."</td>";
							echo "<td>".$filas['codigoPos_usuario']."</td>";
							echo "<td>".$filas['telefono_usuario']."</td>";
							echo "<td>".$filas['direccion_usuario']."</td>";
						echo "</tr>";
						echo "</table>";
					echo "</div>";
				echo "</div>";
			echo "</div>"
		?>
    
    
    
    <?php 
                
include("Conexion.php");
    

$sql = "SELECT pago.id_suario,pago.nombre_tj, pago.banco_e, pago.num_tj,pago.fecha_compra, detallepago.nom_producto, detallepago.precio FROM pago INNER JOIN detallepago where pago.id=detallepago.id_compra AND id_suario='".$_SESSION['id']."'  ORDER BY nombre_tj  ";
    
//$sql="Select * from pago where id_suario='".$_SESSION['id']."'";
$consulta = mysqli_query($conexion,$sql);
	$total = mysqli_num_rows($consulta);    

//echo "Total de nuevos clientes :".$totalfilas."<br>";
	echo "<div class = 'section'>";
				echo "<div class = 'container'>";
					echo "<div class = 'row'>";
    echo "<tr>";
echo "<form action='#'>";
//echo "<td>Compras Realizadas  :".$totalfilas."<br></td>";
echo "</form><hr>";


	echo "<table class='table table-striped' border='1' width='50%'  height='65px'>";
					echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>Historial de Compras</center></td></tr>";
					echo "<tr>";
					
                    echo "<th bgcolor='#FFFFFF'><center>Codigo Cliente</center></th>";
				    echo "<th bgcolor='#FFFFFF'><center>Numero según tarjeta</center></th>";
					echo "<th bgcolor='#FFFFFF'><center>Banco</center></th>";
                    echo "<th bgcolor='#FFFFFF'><center>Tipo Tarjeta</center></th>";
                    echo "<th bgcolor='#FFFFFF'><center>Producto Comprado</center></th>";
                    echo "<th bgcolor='#FFFFFF'><center>Precio</center></th>";
                    echo "<th bgcolor='#FFFFFF'><center>Fecha de compra</center></th>";
                    
					
    
					
					//echo "<th bgcolor='#FFFFFF'><center>Fecha</center></th>";
    
                    
                    
                    
                    //echo "<th bgcolor='#FFFFFF'><center>Numero de Tarjeta</center></th>";
                   // echo "<th bgcolor='#FFFFFF'><center>Mes</center></th>";
                    //echo "<th bgcolor='#FFFFFF'><center>Año</center></th>";
                   
                    
    	
					
                
		
					echo "</tr>";
//echo "<tr><td colspan='5'><hr></td></tr>";


while($fila=mysqli_fetch_array($consulta)) {
	echo "<tr>";

	echo "<td><center>".$fila['id_suario']."</center></td>";
	echo "<td><center>".$fila['nombre_tj']."</center></td>";
	echo "<td><center>".$fila['banco_e']."</center></td>";
	echo "<td><center>".$fila['num_tj']."</center></td>";
    echo "<td><center>".$fila['nom_producto']."</center></td>";
    echo "<td><center>".$fila['precio']."</center></td>";
    echo "<td><center>".$fila['fecha_compra']."</center></td>";

    
	}
	
        


    

    
    
    
    
    
    
    

    	echo "</div>";
				echo "</div>";
			echo "</div>";

         

   



    
    
    
    
    
echo "</table>";
mysqli_close($conexion);

?>
    
    
    
    
    
    
    
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    
		
		<!-- SECTION -->
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
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

</body>
</html>
