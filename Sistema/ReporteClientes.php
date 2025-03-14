<?php
	require("fpdf/fpdf.php");
	$pdf = new FPDF("L","mm",array(220,330));
	$pdf->AliasNbPages();
	$pdf->AddPage("L",array(220,330));
	$pdf->SetFont("Arial","",9);
	$pdf->Cell(300,5,"Fecha: ".Date("Y-m-d"),0,1,"R");
	$pdf->SetFont("Arial","B",14);
	$pdf->Cell(575,10,"LASSTT",0,1,"C");
	$pdf->Ln(1);
	$pdf->Cell(320,10,"REGISTRO DE CLIENTES",0,1,"C");
	$pdf->SetFont("Arial","",10);
	$pdf->SetFillColor(97, 106, 107);
	$pdf->Cell(25,10,"Nombres",1,0,"L",1);
	$pdf->Cell(25,10,"Apellidos",1,0,"L",1);
    $pdf->Cell(55,10,"E-mail",1,0,"L",1);
	$pdf->Cell(22,10,utf8_decode("Contraseña"),1,0,"L",1);
	$pdf->Cell(33,10,"Fecha Nacimiento",1,0,"L",1);
	$pdf->Cell(25,10,"Codigo Postal",1,0,"L",1);
	$pdf->Cell(25,10,"Telefono",1,0,"L",1);
	$pdf->Cell(28,10,"Tarjeta",1,0,"L",1);
	$pdf->Cell(25,10,"CVV",1,0,"L",1);
	$pdf->Cell(35,10,utf8_decode("Dirección"),1,0,"L",1);
	$pdf->Cell(15,10,"Estado",1,0,"L",1);
	$pdf->Ln(10);
	require("Conexion.php");
	$sql = "SELECT *from cliente Order by id_cliente";
	$consulta = mysqli_query($conexion,$sql);
	$total = mysqli_num_rows($consulta);
	while($fila=mysqli_fetch_array($consulta))
	{
		$pdf->Cell(25,10,$fila['nombre_cliente'],0,0,"L");
		$pdf->Cell(25,10,$fila['apellido_cliente'],0,0,"L");
	    $pdf->Cell(55,10,$fila['correo_cliente'],0,0,"L");
		$pdf->Cell(22,10,$fila['contra_cliente'],0,0,"L");
		$pdf->Cell(33,10,$fila['fechanac_cliente'],0,0,"L");
		$pdf->Cell(25,10,$fila['codpostal_cliente'],0,0,"L");
		$pdf->Cell(25,10,$fila['telefono_cliente'],0,0,"L");
		$pdf->Cell(28,10,$fila['tarjetacredito_cliente'],0,0,"L");
		$pdf->Cell(25,10,$fila['codigocvv_cliente'],0,0,"L");
		$pdf->Cell(36,10,utf8_decode($fila['direccion_cliente']),0,0,"L");
		$pdf->Cell(25,10,$fila['Estado'],0,0,"L");
		$pdf->Ln(10);
	}
	$pdf->ln(20);
	$pdf->Line(10,$pdf->GetY(),210,$pdf->GetY());
	$pdf->Cell(0,10,"Total de Clientes: ".$total,0,0,"R");
	$pdf->OutPut();
?>