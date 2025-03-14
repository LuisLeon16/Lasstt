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
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/estilos.css"/>



		<link rel="shortcut icon" href="img/Lasstt.ico" />
</head>

<body>

</div><!-- CONTENEDOR BOTON_FLOTANTE -->
<div id="BarraHTML">
  <div id="BarraIMG">
	<a href="index.html"><img src="img/logo01.png"></a></div></div>
<br>
        
  <h1>Iniciar Sesi&oacute;n</h1><br>
	<div class="Contenedor_Formulario">
		<form action="Sistema/PanelControl.php" method="POST">
			<div class="SubContenedorFormulario">
				<label>
					Usuario
					<i class="fa fa-user"></i>
				</label>
				<input placeholder="Nombre de Usuario" name="UsuarioLogin" type="text" required="">

			</div><!-- SUBCONTENEDORFORMULARIO -->
			<div class="SubContenedorFormulario">
				<label>
					Contrase&ntilde;a
					<i class="fa fa-lock"></i>
				</label>
				<input placeholder="Contrase&ntilde;a" name="ClaveAccesos" type="password" required="">

			</div><!-- SUBCONTENEDORFORMULARIO -->
			<input type="submit" style="margin: 4px;/* dar espacio entre botones */
width: 150px;
height: 40px;" value="Entrar"><!-- BOTON INICIO SESION -->
			<input type="button" style="margin: 4px;/* dar espacio entre botones */
width: 150px;
height: 40px;" class="crearc" value="Crear Cuenta" onClick="window.location = 'Registrar.html';">
	
		</form>
	</div><!-- CONTENEDOR_FORMULARIO -->
	<div class="footer">
		<h2>&copy; Copyright 2020 by <a href="../index.html">LASSTT</a> ·  All Rights reserved  ·  contacto@lasstt.com</h2>
	</div><!-- FOOTER -->
</body>
</html>