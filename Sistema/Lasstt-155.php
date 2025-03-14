<?php
session_start();

require_once './Conexion.php';

if (!isset($_SESSION['RolUsuario'])) {
    header('location:../Login.php');
}

if ($_SESSION['RolUsuario'] == 1) {
    header('location:Listados.php');
}
$compag = (int) (!isset($_GET['pag'])) ? 1 : $_GET['pag'];
$sql = "select * from nuevosproductos";
$result = mysqli_query($conexion, $sql);
$card = "";

$liPag = "";
$CantidadMostrar = 5;
$TotalRegistro = ceil($result->num_rows / $CantidadMostrar);

$sql2 = "select * from nuevosproductos LIMIT " . (($compag - 1) * $CantidadMostrar) . " , " . $CantidadMostrar;
$result2 = mysqli_query($conexion, $sql2);
while ($rows = mysqli_fetch_array($result2)) {
    $foto = $rows['imagen'];
    if ($foto == null) {
        $foto = "generico.jpg";
    }
    $card .= '<div class="col-md-4 col-xs-6">
        <div class="product"><div class="product-im g">
        <img src="./img/' . $foto . '" alt="' . $foto . '" width="100%" height="250px">
        <div class="product-label"><span class="sale">' . $rows['cantidad_Nproducto'] . '</span><span class="new">Cantidad</span></div></div>
        <div class="product-body">
        <p class="product-category">' . $rows['caracteristica_Nproducto'] . '</p>
        <h3 class="product-name"><a href="#">' . $rows['nombre_Nproducto'] . '</a></h3>
        <h4 class="product-price">' . $rows['precio_Nproducto'] . ' <del class="product-old-price">' . ($rows['precio_Nproducto'] + 10) . '</del></h4>
        <div class="product-rating">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <i class="fa fa-star"></i><i class="fa fa-star"></i></div>
        <div class="product-btns">
        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista r&aacute;pida</span></button>
        </div></div><div class="add-to-cart">
        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button></div></div></div>';
}
$IncrimentNum = (($compag + 1) <= $TotalRegistro) ? ($compag + 1) : 1;
$DecrementNum = (($compag - 1)) < 1 ? 1 : ($compag - 1);
$liPag .= "<li class='btn'><a href='?pag=" . $DecrementNum . "'><</a></li>";
$Desde = $compag - (ceil($CantidadMostrar / 2) - 1);
$Hasta = $compag + (ceil($CantidadMostrar / 2) - 1);
$Desde = ($Desde < 1) ? 1 : $Desde;
$Hasta = ($Hasta < $CantidadMostrar) ? $CantidadMostrar : $Hasta;
for ($i = $Desde; $i <= $Hasta; $i++) {
//Se valida la paginacion total
//de registros
    if ($i <= $TotalRegistro) {
//Validamos la pag activo
        if ($i == $compag) {
            $liPag .= "<li class=\"active\"><a href=\"?pag=" . $i . "\">" . $i . "</a></li>";
        } else {
            $liPag .= "<li><a href=\"?pag=" . $i . "\">" . $i . "</a></li>";
        }
    }
}
$liPag .= "<li class=\"btn\"><a href=\"?pag=" . $IncrimentNum . "\">></a></li>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">

        <!-- Las 3 metaetiquetas anteriores deben ir primero en la cabeza; cualquier otro contenido principal debe venir después de estas etiquetas-->

        <title>LASSTT</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!--Bootstrap -->
        <link type = "text/css" rel = "stylesheet" href = "../css/bootstrap.min.css"/>

        <!--nouislider -->
        <link type = "text/css" rel = "stylesheet" href = "../css/nouislider.min.css"/>

        <!--Font Awesome Icon -->
        <link rel = "stylesheet" href = "../css/font-awesome.min.css">

        <!--Custom stlylesheet -->
        <link type = "text/css" rel = "stylesheet" href = "../css/style.css"/>

        <link rel = "shortcut icon" href = "../img/Lasstt.ico" />
    </head>

    <body>
        <!--HEADER -->
        <header>
            <!--TOP HEADER -->
            <div id = "top-header">
                <div class = "container">
                    <ul class = "header-links pull-left">
                        <li><a href = "tel:2256-8945"><i class = "fa fa-phone"></i> +503 2256-8945</a></li>
                        <li><a href = "mailto:contacto@lasstt.com"><i class = "fa fa-envelope-o"></i> contacto@lasstt.com</a></li>
                        <li><a href = "https://bit.ly/3hi1sKw" target = "_blank"><i class = "fa fa-map-marker"></i> Paseo Gral. Escalón 3700, San Salvador</a></li>
                    </ul>
                    <ul class = "header-links pull-right">
                        <li><a href = "index.html"><i class = "fa fa-dollar"></i>USD</a></li>
                        <li>    <?php
echo "<a href='PerfilUsuario.php'>Bienvenido Cliente<br>";
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
                                                            <img src="./img/logo01.png" alt="" >
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
                                          <li><a href="PerfilUsuario.php">Perfil Usuario</a></li>
                                                </ul>
                                                <!-- /NAV -->
                                            </div>
                                            <!-- /responsive-nav -->
                                        </div>
                                        <!-- /container -->
                                    </nav>
                                    <!-- /NAVIGATION -->
									<div id="breadcrumb" class="section">
										<!-- container -->
										<div class="container">
											<!-- row -->
											<div class="row">
												<div class="col-md-12">
													<ul class="breadcrumb-tree">
														<li><a href="Lasstt-15.php">Inicio</a></li>
														<li><a href="Lasstt-15.php">Todas las categor&iacute;as</a></li>
														<li class="active">Ver nuevos productos</a></li>
													</ul>
												</div>
											</div>
											<!-- /row -->
										</div>
										<!-- /container -->
									</div>
                                    <!-- BREADCRUMB -->

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
                                                                <img src="./img/product01.png" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">Laptops</p>
                                                                <h3 class="product-name"><a href="#">Lenovo IdeaPad 3</a></h3>
                                                                <h4 class="product-price">$499.00 <del class="product-old-price">$560.00</del></h4>
                                                            </div>
                                                        </div>

                                                        <div class="product-widget">
                                                            <div class="product-img">
                                                                <img src="./img/product02.png" alt="" >
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">Accesorios</p>
                                                                <h3 class="product-name"><a href="#">PULSE 3D</a></h3>
                                                                <h4 class="product-price">$126.00 <del class="product-old-price">$180.00</del></h4>
                                                            </div>
                                                        </div>

                                                        <div class="product-widget">
                                                            <div class="product-img">
                                                                <img src="./img/product03.png" alt="">
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
						<div class="row">
							<!-- product -->
							<?php
							require("Conexion.php");
							$sqlProdcutos = "Select * from nuevosproductos  where estado ='A'";
							$consulta = mysqli_query($conexion,$sqlProdcutos);
							
							while ($filas = mysqli_fetch_array($consulta)){
								echo"<div class='col-md-4 col-xs-6'>";
									echo"<div class='product'>";
										echo"<div class='product-img'>";
											echo "<img src='foto/".$filas['imagen']."'/>";
											echo "<div class = 'product-label'>";
												echo "<span class = 'sale'>-30%</span>";
												echo "<span class = 'new'>DESTACADO</span>";
											echo "</div>";
										echo"</div>";
										echo"<div class='product-body'>";
											echo"<p class='product-category'>Nombre</p>";
											echo"<h3 class='product-name'><a href='#'>".$filas['nombre_Nproducto']."</a></h3>";
											echo"<h4 class='product-price'> $".$filas['precio_Nproducto']."</h4>";
										echo"</div>";
									echo"</div>";
								echo"</div>";
							}
							?>								
						</div>
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
