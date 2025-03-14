<?php

session_start();

if(!isset($_SESSION['RolUsuario']))
    {
        header('location:../Login.php');    
    }

if($_SESSION['RolUsuario'] == 1){
        header('location:Listados.php');
    }

	if(isset($_SESSION['carro']))
	$carro=$_SESSION['carro'];else $carro=false;
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
		<style type="text/css">
.form-register{

background-color: #1E1F29 }
</style>
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
								echo "<a href='#'>Bienvenido Cliente<br>";
								echo "Usuario: ".$_SESSION['EmailUsuario']."</a><br>";
								echo "<a href='salir.php'>Cerrar Sesion</a>";
							?>
						</li>
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
					    <li class="active"><a href="VerProductos.php">VER CARRITO DE COMPRAS</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION --><br/>
		<?php
			require("Conexion.php");
			$sql="SELECT * FROM usuario WHERE id='".$_SESSION['id']."'";
			$consulta=mysqli_query($conexion,$sql);
			$filas=mysqli_fetch_array($consulta);
		?>
		<form class="form-register" method="POST" name="form-work" action="GuardarCompra.php" enctype="multipart/form-data" >
				<center>
					<h3><font color="white">DETALLES DE LA COMPRA</font></h3>
				<br>
				<font color="white"><label>TOTAL A PAGAR:</label></font>
						<font color="#DF0101" size="4"> $ <?php echo $_SESSION['ValorPagar']; ?></b></font></center>
				<font color="white">
				<label for="id">Nombre de usuario</label>
				<input type="text" name="nomUser" size="25" class="form-control" readonly value="<?php echo $filas['NombreUsuario']." ".$filas['apellidos_usuario'];?>">
				<label for="nombp">Nombre según tarjeta:</label>
				<input type="text" name="nombTj" class="form-control"required placeholder="Nombre segun su tarjeta" id="nombTj" maxlength="10">
				
				<label for="Precio">Banco Emisor:</label>
						<select  name="BancoE" class="form-control"  required>
							<option></option>
							<option value = "Agricola">Banco Agricola</option>
							<option value = "Davivienda">Banco Davivienda</option>
							<option value = "Promerica">Banco Promerica</option>
							<option value = "Cuscatlan">Banco Cuscatlan</option>
							<option value = "Azul">Banco Azul</option>
						</select>
				<label for="cant">N&uacute;mero de tarjeta:</label>
				<input type="number" name="numTj" class="form-control"required placeholder="El n&uacute;mero de su tarjeta" id="cant" min="1" pattern="^[0-9]+">
				<label for="carac">Tarjeta de:</label>
						<select  name="TipoTj" class="form-control" required>
							<option select value = "Credito">Cr&eacute;dito</option>
							<option value = "Debito">D&eacute;bito</option>
							<option value = "Prepago">Prepago</option>
							<option value = "Paypal">Paypal</option>
						</select>
						<label for="mes">Mes:</label>
						<select name="MesV" class="form-control" required>
								<option></option>
								<?php
									for ($j=1;$j<=12;$j++)
									{
										$month=date('M')+$j;
										echo '<option>'.$month.'</option>';
									}
								?>
							</select>
							<label for="anio">A&ntilde;o:</label>
							<select name="AnioV" class="form-control" required>
								<option></option>
								<option><?php echo date('Y');?></option>
								<?php
									for ($j=1;$j<=10;$j++)
									{
										$anio=date('Y')+$j;
										echo '<option>'.$anio.'</option>';
									}
								?>
							
							</select>
							</font>
							<br>
							<center><input type="submit" value="Realizar pago" class="btn btn-danger" name="btn_registrar"></center>
    </form>
		
		<br/><br/>

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
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

</body>
</html>
