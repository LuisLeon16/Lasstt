<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
	require("Conexion.php");
	$NombreDeUsuario=$_POST['UsuarioLogin'];
	$ClaveDeAcceso=$_POST['ClaveAccesos'];
	$sql="select * from usuario where EmailUsuario='$NombreDeUsuario' and Contrasena='$ClaveDeAcceso'";
$ConsultarUsuarios=mysqli_query($conexion,$sql);
	if($ObteniendoUsuarios=mysqli_fetch_assoc($ConsultarUsuarios)){
		if($ClaveDeAcceso==$ObteniendoUsuarios['Contrasena']){
			$_SESSION['id']=$ObteniendoUsuarios['id'];
			$_SESSION['EmailUsuario']=$ObteniendoUsuarios['EmailUsuario'];
			$_SESSION['RolUsuario']=$ObteniendoUsuarios['RolUsuario'];


			if($_SESSION['RolUsuario']=$ObteniendoUsuarios['RolUsuario']==1){

				$_SESSION['RolUsuario']=1;
				header('location: ../Sistema/Listados.php');

			}else if ($_SESSION['RolUsuario']=$ObteniendoUsuarios['RolUsuario']==2) {
				$_SESSION['RolUsuario']=2;
				header('location: ../Sistema/Lasstt-15.php');

			}else{
				echo '<script>alert("Credenciales Incorrectas, Intente Una Vez Más.")</script> ';
				echo "<script>location.href='../Login.php'</script>";	
			}
		}
	}else{
		echo '<script>alert("Credenciales Incorrectas, Intente Una Vez Más.")</script> ';
		echo "<script>location.href='../Login.php'</script>";	
	}
?>