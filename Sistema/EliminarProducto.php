<?php
	session_start();
	extract($_REQUEST);
	$carro=$_SESSION['carro'];
	unset($carro[md5($id)]);
	$_SESSION['carro'] = $carro;
	if(isset($ori)||$ori == 'v'){header('location:VerProductos.php');}
	else{header('location:Lasstt-15.php');}
?>