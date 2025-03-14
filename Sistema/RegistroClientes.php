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
        <link type="text/css" rel="stylesheet" href="../css/estilos.css"/>


        <link rel="shortcut icon" href="../img/Lasstt.ico" />
</head>

<body>
    <!-- HEADER -->
</div><!-- CONTENEDOR BOTON_FLOTANTE -->
<div id="BarraHTML">
  <div id="BarraIMG">
    <a href="index.html"><img src="../img/logo01.png"></a></div></div>
<br>

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- contenedor --><br>
                    <?php
						require("Conexion.php");
						$nom = $_POST['txtNom'];
						$contra = $_POST['txtClave'];
                        $rol=2;
						$mail = $_POST['txtMail'];
						$ape = $_POST['txtApe'];
						$codPos = $_POST['txtCod'];
						$tel = $_POST['txtTel'];
						$dir = $_POST['txtDir'];
						$sql = "insert into usuario (NombreUsuario, Contrasena, RolUsuario, EmailUsuario, apellidos_usuario, codigoPos_usuario, telefono_usuario, direccion_usuario)
						values('$nom', '$contra', '$rol', '$mail', '$ape', $codPos, '$tel', '$dir')";
						$res = mysqli_query($conexion, $sql);
						if($res){
							echo "<h1><center>Registrado correctamente</center></h1><br/>";
							echo "<br/><center><h4><a href='../Login.php'>Clic aqui para continuar</a></h4></center>";
						}
						else{
							echo "Error<br/>";
							echo "<a href='../Login.php'>Continuar</a>"; 
						}	
					?><br><br><br><br><br><br>
                <!--/ contenedor -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

            <div class="footer">
        <h2>&copy; Copyright 2020 by <a href="index.html">LASSTT</a> ·  All Rights reserved  ·  contacto@lasstt.com</h2>
    </div><!-- FOOTER -->
</body>
</html>