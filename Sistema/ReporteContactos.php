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
	$pdf->Cell(200,10,"CONTACTOS",0,1,"C");
	$pdf->SetFont("Arial","",10);
	$pdf->SetFillColor(97, 106, 107);
	$pdf->Cell(60,10,"Nombre del usuario",1,0,"L",1);
	$pdf->Cell(50,10,"Correo electronico",1,0,"L",1);
	$pdf->Cell(30,10,"Telefono usuario",1,0,"L",1);
	$pdf->Cell(48,10,"Asunto",1,0,"L",1);
	$pdf->Ln(10);
	require("Conexion.php");
	$sql = "Select * from contacto";
	$consulta = mysqli_query($conexion,$sql);
	$total = mysqli_num_rows($consulta);
	while($fila=mysqli_fetch_array($consulta))
	{
		$pdf->Cell(62,10,$fila['nombre_contacto'],0,0,"L");
		$pdf->Cell(52,10,$fila['correo_contacto'],0,0,"L");
		$pdf->Cell(25,10,$fila['telefono_contacto'],0,0,"L");
		$pdf->Cell(30,10,$fila['asunto_contacto'],0,0,"L");
		$pdf->Ln(10);
	}
	$pdf->ln(20);
	$pdf->Line(10,$pdf->GetY(),210,$pdf->GetY());
	$pdf->Cell(0,10,"Total mensajes: ".$total,0,0,"R");
	$pdf->OutPut();
?>