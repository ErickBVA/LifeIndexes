<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_radar.php');
//Maximos
$viviendaMax = doubleval($_GET['viviendaMax']);
$ingresosMax = doubleval($_GET['ingresosMax']);
$empleoMax = doubleval($_GET['empleoMax']);
$comunidadMax = doubleval($_GET['comunidadMax']);
$educacionMax = doubleval($_GET['educacionMax']);
$medio_ambienteMax = doubleval($_GET['medio_ambienteMax']);
$compromiso_civicoMax = doubleval($_GET['compromiso_civicoMax']);
$saludMax = doubleval($_GET['saludMax']);
$satisfaccionMax = doubleval($_GET['satisfaccionMax']);
$seguridadMax = doubleval($_GET['seguridadMax']);
$balance_vida_trabajoMax = doubleval($_GET['balance_vida_trabajoMax']);
//Actuales
$vivienda = doubleval($_GET['vivienda']);
$ingresos = doubleval($_GET['ingresos']);
$empleo = doubleval($_GET['empleo']);
$comunidad = doubleval($_GET['comunidad']);
$educacion = doubleval($_GET['educacion']);
$medio_ambiente = doubleval($_GET['medio_ambiente']);
$compromiso_civico = doubleval($_GET['compromiso_civico']);
$salud = doubleval($_GET['salud']);
$satisfaccion = doubleval($_GET['satisfaccion']);
$seguridad = doubleval($_GET['seguridad']);
$balance_vida_trabajo = doubleval($_GET['balance_vida_trabajo']);

$valoresMaximos = array($viviendaMax, $ingresosMax, $empleoMax, $comunidadMax, $educacionMax, $medio_ambienteMax, $compromiso_civicoMax, $saludMax, $satisfaccionMax, $seguridadMax, $balance_vida_trabajoMax);
$valoresActuales = array($vivienda, $ingresos, $empleo, $comunidad, $educacion, $medio_ambiente, $compromiso_civico, $salud, $satisfaccion, $seguridad, $balance_vida_trabajo); 
$pais = $_GET['pais'];

// Create the basic rtadar graph
$graph = new RadarGraph(700,300);
$graph->SetScale('lin',0,1);
 
// Set background color and shadow
$graph->SetColor("#FFF6DC");
$graph->SetShadow();
 
// Position the graph
$graph->SetCenter(0.35,0.55);
 
// Setup the axis formatting     
$graph->axis->SetFont(FF_FONT1,FS_BOLD);
$graph->axis->SetWeight(2);
 
// Setup the grid lines
$graph->grid->SetLineStyle("longdashed");
$graph->grid->SetColor("navy");
$graph->grid->Show();
$graph->HideTickMarks();
        
// Setup graph titles
$graph->title->Set("Comparacion de indices de calidad de vida entre ".$pais." y el resto del mundo");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->SetTitles(array("Vivienda","Ingresos","Empleo","Comunidad","Educacion","Medio Ambiente  ","Compromiso civico","Salud","Satisfaccion","Seguridad", "Balance vida-trabajo"));
// Create the first radar plot        
$plot = new RadarPlot($valoresMaximos);
$plot->SetLegend("Promedio de calidad de vida");
$plot->SetColor("red","lightred");
$plot->SetFill(false);
$plot->SetLineWeight(2);
 
// Create the second radar plot
$plot2 = new RadarPlot($valoresActuales);
$plot2->SetLegend($pais);
$plot2->SetColor("blue","#0DF1F6");
 
// Add the plots to the graph
$graph->Add($plot2);
$graph->Add($plot);
 
// And output the graph
$graph->Stroke();
 
?>