<?php
	require("fpdf/fpdf.php");
	$pdf = new FPDF("L","mm","LETTER");
	$pdf->AliasNbPages();
	$pdf->AddPage("L","LETTER");
	$pdf->SetFont("Arial","",9);
	$pdf->Cell(235,5,"Fecha: ".Date("Y-m-d"),0,1,"R");
	$pdf->SetFont("Arial","B",14);
	$pdf->Cell(445,10,"LASSTT",0,1,"C");
	$pdf->Ln(1);
	$pdf->Cell(250,10,"REGISTRO DE USUARIOS",0,1,"C");
	$pdf->SetFont("Arial","",10);
	$pdf->SetFillColor(97, 106, 107);
	$pdf->Cell(10,10,"Rol",1,0,"L",1);
    $pdf->Cell(15,10,"Estado",1,0,"L",1);
	$pdf->Cell(29,10,"Nombres",1,0,"L",1);
    $pdf->Cell(32,10,"Apellidos",1,0,"L",1);
	$pdf->Cell(55,10,"E-mail",1,0,"L",1);
	$pdf->Cell(25,10,utf8_decode("Contraseña"),1,0,"L",1);
	$pdf->Cell(30,10,"Codigo Postal",1,0,"L",1);
	$pdf->Cell(35,10,"Numero Telefonico",1,0,"L",1);
	$pdf->Cell(35,10,utf8_decode("Dirección"),1,0,"L",1);
	$pdf->Ln(10);
	require("Conexion.php");
	$sql = "SELECT *from usuario Order by RolUsuario";
	$consulta = mysqli_query($conexion,$sql);
	$total = mysqli_num_rows($consulta);
	while($fila=mysqli_fetch_array($consulta))
	{
		$pdf->Cell(11,10,$fila['RolUsuario'],0,0,"L");
		$pdf->Cell(15,10,$fila['Estado'],0,0,"L");
		$pdf->Cell(29,10,$fila['NombreUsuario'],0,0,"L");
		$pdf->Cell(31,10,$fila['apellidos_usuario'],0,0,"L");
		$pdf->Cell(55,10,$fila['EmailUsuario'],0,0,"L");
		$pdf->Cell(25,10,$fila['Contrasena'],0,0,"L");
		$pdf->Cell(30,10,$fila['codigoPos_usuario'],0,0,"L");
		$pdf->Cell(35,10,$fila['telefono_usuario'],0,0,"L");
		$pdf->Cell(40,10,utf8_decode($fila['direccion_usuario']),0,0,"L");
		$pdf->Ln(10);
	}
	$pdf->ln(20);
	$pdf->Line(10,$pdf->GetY(),210,$pdf->GetY());
	$pdf->Cell(0,10,"Total de Usuarios: ".$total,0,0,"R");
	$pdf->OutPut();
?>