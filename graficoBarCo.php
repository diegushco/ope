<?php // content="text/plain; charset=utf-8"
session_start();
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');
 
$datay= $_SESSION["dat"]; 
$leyenda= $_SESSION["nombres"]; 
// Create the graph. These two calls are always required
$graph = new Graph(900,400);
$graph->SetScale('intlin');
 
// Add a drop shadow
$graph->SetShadow();
 
// Adjust the margin a bit to make more room for titles
$graph->SetMargin(60,60,60,60);
 
// Create a bar pot
$bplot = new BarPlot($datay);




// Adjust fill color
$bplot->SetFillColor('orange');
$graph->Add($bplot);
 
// Setup the titles
$graph->title->Set('Grafico Comparacion');
$graph->xaxis->title->Set('Condicion');
$graph->yaxis->title->Set('Cantidad');
$lbl = $leyenda;
$graph->xaxis->SetTickLabels($lbl);




$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Display the graph
$graph->Stroke();
?>