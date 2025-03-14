<?php

//Carga la libreria
require_once ('jpgraph/src/jpgraph.php');
//Cargar la libreria del tipo de graficos a usar 
require_once ('jpgraph/src/jpgraph_bar.php');
//Definir variables 
$id_NproductoX = array( );
$cantidad_NproductoY = array( );
//Conexion
require("Conexion.php");
$sql = "Select id_Nproducto, cantidad_Nproducto from nuevosproductos order by precio_Nproducto";
$consulta = mysqli_query($conexion, $sql);
while ($filas = mysqli_fetch_array ($consulta))
{
    //valores a graficar 
    $id_NproductoX[]=$filas['id_Nproducto'];
    $cantidad_NproductoY[]=$filas['cantidad_Nproducto'];
}

//Definir o crear el objeto de mi grafica u esscala a usar 
$grafica= new Graph(500,500,"auto");//ancho y alto
$grafica->SetScale("textint");//escala a usar 
$tema=new AquaTheme;
$grafica->SetTheme($tema);
//Poner titulos
$grafica->title->set("Cantidad de los Productos");
$grafica->xaxis->title->set("Productos");
$grafica->yaxis->title->set("Cantidad");

//Agregar los datos  
$grafica->xaxis->SetTickLabels($id_NproductoX);
//Agregar los datos 
$barra= new BarPlot($cantidad_NproductoY);
//Agregar la Barra al objeto grafico
$grafica->Add($barra);
//Generamos el grafico
$grafica->Stroke(); 
?>