<?php

	session_start();

	if(!isset($_SESSION['RolUsuario']))
    {
        header('location:../Login.php');    
    }

	if($_SESSION['RolUsuario'] == 1){
        header('location:Listados.php');
    }

	
	$contar = 0;
	if(isset($_SESSION['carro']))
	{
		if($_SESSION['carro'] == false)
		{
			$carro = false;
		}else{
			$contar = count($_SESSION['carro']);
			$carro = $_SESSION['carro'];
		}
	}else{
		$carro = false;
	}
	require("Conexion.php");
	$sql = "Select * from productos  where estado ='A' order by id";
	$consulta = mysqli_query($conexion,$sql);
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
					    <li class="active"><a href="Lasstt-15.php">Productos y/o servicios</a></li>
                        <li><a href="Lasstt-14.php">Encuesta</a></li>
                      <li><a href="Lasstt-11.php">Cont&aacute;ctanos</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<!--<ul class="breadcrumb-tree">
							<h1>Pr&oacute;ximamente estos productos...</h1>
						</ul>
						<hr/>-->
					</div>
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="Lasstt-15.php">Inicio</a></li>
							<li class="active">Todas las categor&iacute;as</a></li>
							<li><a href="Lasstt-155.php">Ver nuevos productos</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categor&iacute;as</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Laptops
										<small>(20)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Computadoras
										<small>(30)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Accesorios
										<small>(15)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Precio</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Marca</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										DELL
										<small>(10)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LENOVO
										<small>(14)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										HP
										<small>(12)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										ACER
										<small>(3)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										SAMSUNG
										<small>(5)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span></span>
										TOSHIBA
										<small>(10)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-7">
									<label for="brand-7">
										<span></span>
										OTROS
										<small>(20)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">M&aacute;s vendido</h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="img/LENOVO IDEAPAD 3.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Laptops</p>
									<h3 class="product-name"><a href="#">Lenovo IdeaPad 3</a></h3>
									<h4 class="product-price">$499.00 <del class="product-old-price">$560.00</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="img/PULSE 3D.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Accesorios</p>
									<h3 class="product-name"><a href="#">PULSE 3D</a></h3>
									<h4 class="product-price">$126.00 <del class="product-old-price">$180.00</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="img/LAPTOP HP CHROMEBOOK 11 G5.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Laptops</p>
									<h3 class="product-name"><a href="#">Laptop HP Chromebook 11 G5</a></h3>
									<h4 class="product-price">$295.00 <del class="product-old-price">$323.00</del></h4>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Ordenar por:
									<select class="input-select">
										<option value="0">Relevancia</option>
										<option value="1">Popular</option>
										<option value="2">Nombre (Ascendente)</option>
										<option value="3">Nombre (Descendente)</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li ><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->
						<!-- store products -->
						<div class="row">
							<!-- product -->
							<hr/>
							<center><h2>VER PRODUCTOS SELECCIONADOS</h2><br/>
								<a href="VerProductos.php">
									<i class="fa fa-shopping-cart" width="40" height="40" alt="Compras">&nbsp;</i><?php echo $contar?>
								</a></center>
							<hr/>
							<?php
							while($filas=mysqli_fetch_array($consulta)){
								echo"<div class='col-md-4 col-xs-6'>";
									echo"<div class='product'>";
										echo"<div class='product-img'>";
											echo "<img src='foto/".$filas['foto']."'/>";
										echo"</div>";
										echo"<div class='product-body'>";
											echo"<p class='product-category'>Nombre</p>";
											echo"<h3 class='product-name'><a href='#'>".$filas['producto']."</a></h3>";
											echo"<h4 class='product-price'>$".$filas['precio']."</h4>";
										echo"</div>";
										echo"<div class='add-to-cart'>";
											if(!$carro || !isset($carro[md5($filas['id'])]['identificador']) || $carro[md5($filas['id'])]['identificador']!=md5($filas['id']))
											{
												echo"<a href='AgregarProducto.php?id=".$filas['id']."'><button class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> Añadir al carrito</button></a>";
											}
											else{
												echo "<a href='EliminarProducto.php?id=".$filas['id']."'><button class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i>Cancelar seleccion</button></a>";
											}
										echo"</div>";
									echo"</div>";
								echo"</div>";
							}
							?>							
						</div>
					</div>
							<!-- /product -->
				</div>
				
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
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
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

</body>
</html>
