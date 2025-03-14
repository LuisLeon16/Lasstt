<?php
	session_start();
	extract($_REQUEST);
	require('Conexion.php');
	if(!isset($cantidad)){$cantidad=1;}
	$sql="select * from productos where id='$id'";
	$pro = mysqli_query($conexion,$sql);
	$fila = mysqli_fetch_array($pro);
	if(isset($_SESSION['carro'])){$carro=$_SESSION['carro'];}
	$carro[md5($id)]=array('identificador'=>md5($id),
		'cantidad'=>$cantidad,
		'producto'=>$fila['producto'],
		'precio'=>$fila['precio'],
		'id'=>$id);
	$_SESSION['carro'] = $carro;
	if(isset($ori) || $ori == 'v'){header('location:VerProductos.php');}
	else{header('location:Lasstt-15.php');}
?>