<?php
//Carga la libreria
require_once ('jpgraph/src/jpgraph.php');
//Cargar la libreria del tipo de graficos a usar 
require_once ('jpgraph/src/jpgraph_line.php');
//Definir lo datos de la base de datos 
$escala_encuestaX = array( );
$probabilidadcompra_encuestaY = array( );
//Conexion
require("Conexion.php");
$sql = "Select probabilidadcompra_encuesta , escala_encuesta from encuesta GROUP BY buscarproducto_encuesta";
$consulta = mysqli_query($conexion, $sql);
while ($filas = mysqli_fetch_array ($consulta))
{
    //valores a graficar 
    $escala_encuestaX[]=$filas['escala_encuesta'];
    $probabilidadcompra_encuestaY[]=$filas['probabilidadcompra_encuesta'];
}
//Definir o crear el objeto de mi grafica u esscala a usar 
$grafica= new Graph(500,500,"auto");//ancho y alto 
$grafica->SetScale("textlin");//escala a usar 
$tema=new AquaTheme;
$grafica->SetTheme($tema);
//Poner titulos
$grafica->title->set("Escala de Encuesta segun la Probabilidad de Compra");
//Muestra la cuadricula del grafico
$grafica->xgrid->show();
$grafica->xaxis->SetTickLabels($probabilidadcompra_encuestaY);

//Crear linea de datos
$linea = new LinePlot($escala_encuestaX); 
$linea->SetColor("#000");
$grafica->Add($linea);
//Generamos el grafico
$grafica->Stroke(); 
?>
