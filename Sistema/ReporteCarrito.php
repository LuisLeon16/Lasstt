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
	$pdf->Cell(200,10,"REGISTRO DE COMPRA",0,1,"C");
	$pdf->SetFont("Arial","",10);
	$pdf->SetFillColor(97, 106, 107);
	$pdf->Cell(35,10,"Nombre Comprador",1,0,"L",1);
	$pdf->Cell(25,10,"Banco emisor",1,0,"L",1);
	$pdf->Cell(35,10,"Numero de la tarjeta",1,0,"L",1);
	$pdf->Cell(65,10,"Nombre del producto",1,0,"L",1);
	$pdf->Cell(35,10,"Precio unico",1,0,"L",1);
	$pdf->Ln(10);
	require("Conexion.php");
	$sql = "SELECT pago.nombre_tj, pago.banco_e, pago.num_tj, detallepago.nom_producto, detallepago.precio FROM pago INNER JOIN detallepago where pago.id=detallepago.id_compra ORDER BY nombre_tj";
	$consulta = mysqli_query($conexion,$sql);
	$total = mysqli_num_rows($consulta);
	while($fila=mysqli_fetch_array($consulta))
	{
		$pdf->Cell(37,10,$fila['nombre_tj'],0,0,"L");
		$pdf->Cell(25,10,$fila['banco_e'],0,0,"L");
		$pdf->Cell(35,10,$fila['num_tj'],0,0,"L");
		$pdf->Cell(67,10,$fila['nom_producto'],0,0,"L");
		$pdf->Cell(30,10,"$ ".$fila['precio'],0,0,"L");
		$pdf->Ln(10);
	}
	$pdf->ln(20);
	$pdf->Line(10,$pdf->GetY(),210,$pdf->GetY());
	$pdf->Cell(0,10,"Total de productos: ".$total,0,0,"R");
	$pdf->OutPut();
?>