<?php

//Carga la libreria
require_once ('jpgraph/src/jpgraph.php');
//Cargar la libreria del tipo de graficos a usar 
require_once ('jpgraph/src/jpgraph_bar.php');
//Definir variables 
$nombre_NproductoX = array( );
$precio_NproductoY = array( );
//Conexion
require("Conexion.php");
$sql = "Select nombre_Nproducto, precio_Nproducto from nuevosproductos order by precio_Nproducto desc LIMIT 5";
$consulta = mysqli_query($conexion, $sql);
while ($filas = mysqli_fetch_array ($consulta))
{
    //valores a graficar 
    $nombre_NproductoX[]=$filas['nombre_Nproducto'];
    $precio_NproductoY[]=$filas['precio_Nproducto'];
}

//Definir o crear el objeto de mi grafica u esscala a usar 
$grafica= new Graph(500,500,"auto");//ancho y alto
$grafica->SetScale("textint");//escala a usar 
$tema=new AquaTheme;
$grafica->SetTheme($tema);
$grafica->SetColor("#581845"); //Color
//Poner titulos
$grafica->title->set("Precios de los Productos");
$grafica->xaxis->title->set("Productos");
$grafica->yaxis->title->set("Precios");

//Agregar los datos  
$grafica->xaxis->SetTickLabels($nombre_NproductoX);
//Agregar los datos 
$barra= new BarPlot($precio_NproductoY);
//Agregar la Barra al objeto grafico
$grafica->Add($barra);
//Generamos el grafico
$grafica->Stroke(); 
?>