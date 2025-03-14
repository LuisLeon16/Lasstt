<?php
	require("fpdf/fpdf.php");
	$pdf = new FPDF("P","mm","LETTER");
	$pdf->AliasNbPages();
	$pdf->AddPage("P","LETTER");
	$pdf->SetFont("Arial","",9);
	$pdf->Cell(175,5,"Fecha: ".Date("Y-m-d"),0,1,"R");
	$pdf->SetFont("Arial","B",14);
	$pdf->Cell(325,10,"LASSTT",0,1,"C");
	$pdf->Ln(1);
	$pdf->Cell(200,10,"PRODUCTOS",0,1,"C");
	$pdf->SetFont("Arial","",10);
	$pdf->SetFillColor(97, 106, 107);
	$pdf->Cell(30,10,"Numero producto",1,0,"L",1);
	$pdf->Cell(65,10,"Nombre del producto",1,0,"L",1);
	$pdf->Cell(40,10,"Existencia en bodega",1,0,"L",1);
	$pdf->Cell(30,10,"Precio",1,0,"L",1);
	$pdf->Ln(10);
	require("conexion.php");
	$sql = "Select * from productos";
	$consulta = mysqli_query($conexion,$sql);
	$total = mysqli_num_rows($consulta);
	while($fila=mysqli_fetch_array($consulta))
	{
		$pdf->Cell(32,10,$fila['id'],0,0,"L");
		$pdf->Cell(80,10,$fila['producto'],0,0,"L");
		$pdf->Cell(30,10,$fila['existencia'],0,0,"L");
		$pdf->Cell(30,10,"$ ".$fila['precio'],0,0,"L");
		$pdf->Ln(10);
	}
	$pdf->ln(20);
	$pdf->Line(10,$pdf->GetY(),210,$pdf->GetY());
	$pdf->Cell(0,10,"Total de productos: ".$total,0,0,"R");
	$pdf->OutPut();
?>