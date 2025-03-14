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
				
	<?php 
include("Conexion.php");
$codigo=$_GET['id'];

$sql="Select * from usuario where id='$codigo'";
$consulta=mysqli_query($conexion,$sql);
$filas=mysqli_fetch_array($consulta);

//echo "Total de nuevos clientes :".$totalfilas."<br>";

	//echo "<table border='1' width='100%' height='100px'>";
		//			echo "<tr><td colspan='17' bgcolor='#1E1F29' style='color:white' height='30'><center>LISTADO DE LA TABLA  PRODUCTOS</center></td></tr>";
		//			
			
					
				///	echo "<tr>";
					
						//echo "<td>".."</td>";
						//echo "<td>".$filas['id']."</td>";
						//echo "<td>".$filas['nombre_Nproducto']."</td>";
						//echo "<td>".$filas['precio_Nproducto']."</td>";
						//echo "<td>".$filas['cantidad_Nproducto']."</td>";
						//echo "<td>".$filas['caracteristica_Nproducto']."</td>";
						
							//echo "<td><img src='Imagenes_LASSTT/".$filas['foto']."'width=100' height='100' alt''</td>";

					//echo "</tr>";
							//echo "</tr>";



//echo "</table>";
mysqli_close($conexion);

?>
<h1>Modificar nuevos datos</h1><hr>
	<form action='mantenimientouser.php'>
	<input type="submit" value="Regresar" class="btn btn-success">
		</form>
	<form  method="POST" name="form-work" action="Actualizaruser.php" enctype="multipart/form-data" >
                                               <fieldset>



                                               		<div class="form-group">
											 <div class="col-md-6">
     							   			<label for="id">ID</label>
        									<input type="text" name="id" class="form-control"required placeholder="id" id="id" readonly value="<?php echo $filas['id'];?>">
  										  </div>
  										  </div>

                 			<div class="form-group">
											 <div class="col-md-6">
     							   			<label for="rol">Rol Usuario</label>
        									<input type="text" name="rol" class="form-control" required placeholder="Tu rol" id="rol" value="<?php echo $filas['RolUsuario'];?>">
  										  </div>
  										  </div>
                             
										<div class="form-group">
											 <div class="col-md-6">
     							   			<label for="nomb">NombreUsuario</label>
        									<input type="text" name="nomb" class="form-control" required placeholder="Tu nombre" id="nomb" value="<?php echo $filas['NombreUsuario'];?>">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="Contra">Contrasena</label>
        									<input type="text" name="Contra" class="form-control" required placeholder="Tu Contra" id="Contra" value="<?php echo $filas['Contrasena'];?>">
  										  </div>
  										  </div>
  										  
  										       <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="Email">EmailUsuario</label>
        									<input type="text" name="Email" class="form-control" required placeholder="Tu Email" id="Email" value="<?php echo $filas['EmailUsuario'];?>">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="apell">apellidos_usuario</label>
        									<input type="text" name="apell" class="form-control" required placeholder="Tu apellido" id="apell" value="<?php echo $filas['apellidos_usuario'];?>">
  										  </div>
  										  </div>

                          <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="cod">codigoPos_usuario</label>
        									<input type="text" name="cod" class="form-control" required placeholder="Tu cod" id="cod" value="<?php echo $filas['codigoPos_usuario'];?>">
  										  </div>
  										  </div>

                           <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="tele">telefono_usuario</label>
        									<input type="text" name="tele" class="form-control" required placeholder="Tu telefono" id="tele" value="<?php echo $filas['telefono_usuario'];?>">
  										  </div>
  										  </div>

                           <div class="form-group">
											 <div class="col-md-6">
     							   			<label for="direcc">direccion_usuario</label>
        									<input type="text" name="direcc" class="form-control" required placeholder="Tu direccion" id="direcc" value="<?php echo $filas['direccion_usuario'];?>">
  										  </div>
  										  </div>

                      	

                                    <div class="form-group">
                                      <div class="col-md-12">
                                           <br>   <br>	
                                        <!--/<button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>-->
                              <center><input type="submit" value="Actualizar" class="btn btn-primary" name="btn_editar" onclick="myFunction()"></center>

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