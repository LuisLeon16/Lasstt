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
					    <li class="active"><a href="Lasstt-15.php">VOLVER</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION --><br/>
		<h3 align="center">PRODUCTOS AGREGADOS AL CARRITO DE COMPRAS</h3><br>
		<?php 
			if($carro){
		?>
			<center><table width="720" border="0" cellspacing="0" cellpadding="0" width='100%' height='65px'>
			<tr class="tit" bgcolor='#1E1F29' style='color:white' height='30'> 
				<td width="105"><center><b>Producto</b></center></td><td width="207"><center><b>Precio</b></center></td>
				<td colspan="2"><center><b>Cantidad</b></center></td><td width="100"><center><b>Eliminar</b></center></td>
				<td width="159"><center><b>Actualizar</b></center></td>
			</tr>
		<?php
			$color = array("#ffffff","#F0F0F0");$contador = 0;$suma = 0;
			foreach($carro as $k => $v){
				$subto = $v['cantidad'] * $v['precio'];	$suma = $suma + $subto;	$contador++;
				$_SESSION['ValorPagar'] = $suma;
		?>
				<form name = "a<?php echo $v['identificador'] ?>" method="post" action="AgregarProducto.php?<?php 
					echo SID ?> &id = <?php echo $v['identificador'] ?> &ori = v">
					<tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
						<td><?php echo "<center>".$v['producto']."</center>" ?></td>
						<td><?php echo "<center>".$v['precio']."</center>" ?></td>
						<td width="43" align="center"><?php echo $v['cantidad'] ?></td>
						<td width="136" align="center"> 
							<input class="form-control" name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
							<input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>">
						</td>
						<td align="center">
							<a href="EliminarProducto.php?<?php echo SID ?>&id=<?php echo $v['id']?>&ori=v"><img src="img/borrar.png" width="18" height="20" border="0"></a>
						</td>
						<td align="center"> 
							<input name="imageField" type="image" src="img/actualizar.gif" width="25" height="25" border="0" />
						</td>
					</tr>
				</form>
		<?php 
			}
		?>	</table></center>
		<div align="center">
			<span class="prod">Total de Art&iacute;culos: <?php echo count($carro);
		?></span> 
		</div><br>
		<div align="center"><span class="prod">Total compra: $<?php echo number_format($suma,2);
		?></span> 
		</div><br><hr/>
		<div align="center">
			<span class="prod">
				<b><a href="Lasstt-15.php">AGREGAR M&Aacute;S PRODUCTOS</b>
				<img src="img/regresar.jpg" width="30" height="30"/></a>
			</span>
		</div><hr/>
		<div align="center"> 
			<a href="RealizarPago.php?<?php echo SID;?>">REALIZAR PAGO
			<img src="img/seguir.jpg" width="30" height="30"></a> 
		</div>
		<?php }else{ ?><br/><br/>
		<p align="center"> <span class="prod"><b>NING&Uacute;N PRODUCTO SELECCIONADO</b></span>
			<a href="Lasstt-15.php?<?php echo SID;?>">
				<img src="img/regresar.jpg" width="35" height="35" border="0">
			</a> 
			<?php }?>
		</p><hr/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
