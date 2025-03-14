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
						<li><?php
echo "<a href='PerfiAdmin.php'>Bienvenido Administrador<br>";
echo "Usuario: ".$_SESSION['EmailUsuario']."</a><br>";
//echo "<a href='salir.php'>Cerrar Sesion</a>";
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
				



<h1>Detalles de Compra </h1><hr>
<form action='#' onclick="window.close();">
	<input type="submit" value="cerrar" class="btn btn-success">
		</form>
	<?php 
include("Conexion.php");
$codigo=$_GET['id'];

$sql="Select * from pago  where id='$codigo'";      
$consulta=mysqli_query($conexion,$sql);
$filas=mysqli_fetch_array($consulta);
                
                $sqli="SELECT pago.id, pago.id_suario, pago.fecha_compra, detallepago.nom_producto, pago.valor, pago.nombre_tj, pago.banco_e, pago.num_tj, pago.mes_tj, pago.year_tj, pago.Estado FROM pago INNER JOIN detallepago WHERE pago.id='$codigo' AND detallepago.id_compra='$codigo'";
                
                $consult=mysqli_query($conexion,$sqli);
                $fila=mysqli_fetch_array($consult);
                

//echo "Total de nuevos clientes :".$totalfilas."<br>";

	echo "<table border='1' width='100%' height='200px'>";
					
                    echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center> Compra </center></td></tr>";
					echo "<tr>";
					
				  
                 echo "<tr>";   
                echo "<td><b>Codigo de compra</b></td>";
                echo "<td><center>".$filas['id']."</center></td>";
                echo "</tr>";
              
                echo "<tr>";
                echo "<td><b>Codigo Cliente</b></td>";
                echo "<td><center>".$filas['id_suario']."</center></td>";
                echo "</tr>";
                
                echo "<tr>";
                echo "<td><b>Fecha</b></td>";
                echo "<td><center>".$filas['fecha_compra']."</center></td>";
                echo "</tr>";
                
                
                
                while ($fila=mysqli_fetch_array($consult)){
                 echo "<tr>";
                echo "<td><b>Producto Comprado</b></td>";
                echo "<td><center>".$fila['nom_producto']."</center></td>";
                echo "</tr>";
                }
                
                echo "<tr>";
                echo "<td><b>Precio</b></td>";
                echo "<td><center>".$filas['valor']."</center></td>";
                echo "</tr>";

                
                
                echo "<tr>";
                echo "<td><b>Tipo Tarjeta</b></td>";
                echo "<td><center>".$filas['tipo_tj']."</center></td>";
                echo "</tr>";

                
                echo "<tr>";
                echo "<td><b>Nombre Cliente</b></td>";
               echo "<td><center>".$filas['nombre_tj']."</center></td>";
                echo "</tr>";

                
                echo "<tr>";
                echo "<td><b>Banco</b></td>";
               echo "<td><center>".$filas['banco_e']."</center></td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td><b>Numero Tarjeta</b></td>";
                echo "<td><center>".$filas['num_tj']."</center></td>";
                echo "</tr>";

                
                echo "<tr>";
                echo "<td><b>Mes</b></td>";
                echo "<td><center>".$filas['mes_tj']."</center></td>";         
                echo "</tr>";

                
                echo "<tr>";
                echo "<td><b>Año</b></td>";
                 echo "<td><center>".$filas['year_tj']."</center></td>";
                echo "</tr>";
                
                echo "<tr>";
                echo "<td><b>Estado</b></td>";
				echo "<td><center>".$filas['Estado']."</center></td>";
                echo "</tr>";
					
					
					echo "</tr>";
                
					
					

					

	
	
	echo "</tr>";
echo "</table>";
mysqli_close($conexion);

?>

    
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

			
				<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/Enc.js"></script>

</body>
</html>