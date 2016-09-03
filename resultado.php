<?php
	require_once ('funciones.php');
	require_once ('jpgraph/jpgraph.php');
	require_once ('jpgraph/jpgraph_radar.php');
	$id = $_GET['paisSeleccionado'];
	define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    $db = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
    if(!$db){
   		die('No se pudo conectar: ' . mysqli_error());
    }
	$sql = 'SELECT
  `pais`,
  `v1`,
  `v2`,
  `v3`,
  `i1`,
  `i2`,
  `emp1`,
  `emp2`,
  `emp3`,
  `emp4`,
  `comunidad`,
  `edu1`,
  `edu2`,
  `edu3`,
  `med1`,
  `med2`,
  `comp1`,
  `comp2`,
  `sal1`,
  `sal2`,
  `satisfaccion`,
  `seg1`,
  `seg2`,
  `balan1`,
  `balan2`
  FROM `valores` WHERE id='.$id.'';
	mysql_select_db('indice_de_calidad');
	$retval = mysql_query( $sql, $db );
	if(! $retval )
	{
	  die('No se pudieron obtener datos: ' . mysql_error());
	}
	
	  $pais = "";
	  $v1 = "";
	  $v2 = "";
	  $v3 = "";
	  $i1 = "";
	  $i2 = "";
	  $emp1 = "";
	  $emp2 = "";
	  $emp3 = "";
	  $emp4 = "";
	  $comunidad = "";
	  $edu1 = "";
	  $edu2 = "";
	  $edu3 = "";
	  $med1 = "";
	  $med2 = "";
	  $comp1 = "";
	  $comp2 = "";
	  $sal1 = "";
	  $sal2 = "";
	  $satisfaccion = "";
	  $seg1 = "";
	  $seg2 = "";
	  $balan1 = "";
	  $balan2 = "";
	  
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	  $pais = $row['pais'];
	  $v1 = $row['v1'];
	  $v2 = $row['v2'];
	  $v3 = $row['v3'];
	  $i1 = $row['i1'];
	  $i2 = $row['i2'];
	  $emp1 = $row['emp1'];
	  $emp2 = $row['emp2'];
	  $emp3 = $row['emp3'];
	  $emp4 = $row['emp4'];
	  $comunidad = $row['comunidad'];
	  $edu1 = $row['edu1'];
	  $edu2 = $row['edu2'];
	  $edu3 = $row['edu3'];
	  $med1 = $row['med1'];
	  $med2 = $row['med2'];
	  $comp1 = $row['comp1'];
	  $comp2 = $row['comp2'];
	  $sal1 = $row['sal1'];
	  $sal2 = $row['sal2'];
	  $satisfaccion = $row['satisfaccion'];
	  $seg1 = $row['seg1'];
	  $seg2 = $row['seg2'];
	  $balan1 = $row['balan1'];
	  $balan2 = $row['balan2'];
	}
	
	echo "<head>
		<title>".$pais."</title>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
		<link rel='stylesheet' href='css/estilo.css'>
		<script src='js/bootstrap.min.js'></script>
		<meta charset='UTF-8'>
	</head>";
	echo "<body style='background: -webkit-radial-gradient(center, ellipse cover, rgba(169,3,41,1) 0%, rgba(235,127,152,0.78) 57%, rgba(109,0,25,0.65) 89%, rgba(109,0,25,0.61) 100%);'>";
	echo "<h1 style='text-align: center' class='texto'>".$pais."</h1>";
	echo "<div style='overflow-x: scroll; width:1000px; margin: auto;'>";
	echo "<table class='table' align='center' border='1' cellpadding='10px';>";
	echo "	<tr class='warning'>
				<td colspan='3'><a href='http://www.oecdbetterlifeindex.org/es/topics/housing-es/' target='_blank'><b>Vivienda</b></a></td>
				<td colspan='2'>Ingresos</td>
				<td colspan='4'>Empleo</td>
				<td>Comunidad</td>
				<td colspan='3'>Educación</td>
				<td colspan='2'>Medio ambiente</td>
				<td colspan='2'>Compromiso cívico</td>
				<td colspan='2'>Salud</td>
				<td>Satisfacción</td>
				<td colspan='2'>Seguridad</td>
				<td colspan='2'>Balance vida-trabajo</td>
			</tr>
			<tr class='success'>
				<td>Habitaciones por persona</td>
				<td>Vivienda con instalaciones basicas</td>
				<td>Gasto en vivienda</td>
				<td>Ingreso familiar disponible</td>
				<td>Patrimonio financiero familiar</td>
				<td>Tasa de empleo</td>
				<td>Tasa de empleo a largo plazo</td>
				<td>Ingresos personales</td>
				<td>Seguridad en el empleo</td>
				<td>Calidad de apoyo social</td>
				<td>Nivel de educacion</td>
				<td>Competencias de estudiantes en matematicas, lecturas y ciencias</td>
				<td>Anios de educacion</td>
				<td>Contaminacion del aire</td>
				<td>Calidad del agua</td>
				<td>Participacion electoral</td>
				<td>Participacion de los interesados en la elaboracion de regulaciones</td>
				<td>Esperanza de vida</td>
				<td>Salud segun informan las personas</td>
				<td>Satisfaccion ante la vida</td>
				<td>Sentimiento de seguridad al caminar solos por la noche</td>
				<td>Tasa de homicidios</td>
				<td>Empleados que trabajan muchas horas</td>
				<td>Tiempo destinado al ocio y el cuidado personal</td>
			</tr>
		 ";
	echo "	<tr class='info' style='text-align: center;'>
				<td>".$v1."</td>
				<td>".$v2."</td>
				<td>".(100 - $v3)."</td>
				<td>".$i1."</td>
				<td>".$i2."</td>
				<td>".$emp1."</td>
				<td>".(100 - $emp2)."</td>
				<td>".$emp3."</td>
				<td>".(100 - $emp4)."</td>
				<td>".$comunidad."</td>
				<td>".$edu1."</td>
				<td>".$edu2."</td>
				<td>".$edu3."</td>
				<td>".$med1."</td>
				<td>".$med2."</td>
				<td>".$comp1."</td>
				<td>".$comp2."</td>
				<td>".$sal1."</td>
				<td>".$sal2."</td>
				<td>".$satisfaccion."</td>
				<td>".$seg1."</td>
				<td>".(100 - $seg2)."</td>
				<td>".(100 - $balan1)."</td>
				<td>".$balan2."</td>
			</tr>
		 ";
	echo "</table>";
	echo "</div>";
	
	  $v1Max = "";
	  $v2Max = "";
	  $v3Max = "";
	  $i1Max = "";
	  $i2Max = "";
	  $emp1Max = "";
	  $emp2Max = "";
	  $emp3Max = "";
	  $emp4Max = "";
	  $comunidadMax = "";
	  $edu1Max = "";
	  $edu2Max = "";
	  $edu3Max = "";
	  $med1Max = "";
	  $med2Max = "";
	  $comp1Max = "";
	  $comp2Max = "";
	  $sal1Max = "";
	  $sal2Max = "";
	  $satisfaccionMax = "";
	  $seg1Max = "";
	  $seg2Max = "";
	  $balan1Max = "";
	  $balan2Max = "";
	
	$sql = 'SELECT
		MAX(`v1`) as max_v1,
		MAX(`v2`) as max_v2,
		MAX(`v3`) as max_v3,
		MAX(`i1`) as max_i1,
		MAX(`i2`) as max_i2,
		MAX(`emp1`) as max_emp1,
		MAX(`emp2`) as max_emp2,
		MAX(`emp3`) as max_emp3,
		MAX(`emp4`) as max_emp4,
		MAX(`comunidad`) as max_comunidad,
		MAX(`edu1`) as max_edu1,
		MAX(`edu2`) as max_edu2,
		MAX(`edu3`) as max_edu3,
		MAX(`med1`) as max_med1,
		MAX(`med2`) as max_med2,
		MAX(`comp1`) as max_comp1,
		MAX(`comp2`) as max_comp2,
		MAX(`sal1`) as max_sal1,
		MAX(`sal2`) as max_sal2,
		MAX(`satisfaccion`) as max_satisfaccion,
		MAX(`seg1`) as max_seg1,
		MAX(`seg2`) as max_seg2,
		MAX(`balan1`) as max_balan1,
		MAX(`balan2`) as max_balan2
	FROM `valores`';
	mysql_select_db('indice_de_calidad');
	$retval = mysql_query( $sql, $db );
	if(! $retval )
	{
	  die('No se pudieron obtener datos: ' . mysql_error());
	}
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	  $v1Max = number_format($row['max_v1'],2);
	  $v2Max = number_format($row['max_v2'],2);
	  $v3Max = number_format($row['max_v3'],2);
	  $i1Max = number_format($row['max_i1'],2);
	  $i2Max = number_format($row['max_i2'],2);
	  $emp1Max = number_format($row['max_emp1'],2);
	  $emp2Max = number_format($row['max_emp2'],2);
	  $emp3Max = number_format($row['max_emp3'],2);
	  $emp4Max = number_format($row['max_emp4'],2);
	  $comunidadMax = number_format($row['max_comunidad'],2);
	  $edu1Max = number_format($row['max_edu1'],2);
	  $edu2Max = number_format($row['max_edu2'],2);
	  $edu3Max = number_format($row['max_edu3'],2);
	  $med1Max = number_format($row['max_med1'],2);
	  $med2Max = number_format($row['max_med2'],2);
	  $comp1Max = number_format($row['max_comp1'],2);
	  $comp2Max = number_format($row['max_comp2'],2);
	  $sal1Max = number_format($row['max_sal1'],2);
	  $sal2Max = number_format($row['max_sal2'],2);
	  $satisfaccionMax = number_format($row['max_satisfaccion'],2);
	  $seg1Max = number_format($row['max_seg1'],2);
	  $seg2Max = number_format($row['max_seg2'],2);
	  $balan1Max = number_format($row['max_balan1'],2);
	  $balan2Max = number_format($row['max_balan2'],2);  
	}

	$v1Dif = calcularGrados($v1Max, $v1);
	  $v2Dif = calcularGrados($v2Max, $v2);
	  $v3Dif = calcularGrados($v3Max, $v3);
	  $i1Dif = calcularGrados($i1Max, $i1);
	  $i2Dif = calcularGrados($i2Max, $i2);
	  $emp1Dif = calcularGrados($emp1Max, $emp1);
	  $emp2Dif = calcularGrados($emp2Max, $emp2);
	  $emp3Dif = calcularGrados($emp3Max, $emp3);
	  $emp4Dif = calcularGrados($emp4Max, $emp4);
	  $comunidadDif = calcularGrados($comunidadMax, $comunidad);
	  $edu1Dif = calcularGrados($edu1Max, $edu1);
	  $edu2Dif = calcularGrados($edu2Max, $edu2);
	  $edu3Dif = calcularGrados($edu3Max, $edu3);
	  $med1Dif = calcularGrados($med1Max, $med1);
	  $med2Dif = calcularGrados($med2Max, $med2);
	  $comp1Dif = calcularGrados($comp1Max, $comp1);
	  $comp2Dif = calcularGrados($comp2Max, $comp2);
	  $sal1Dif = calcularGrados($sal1Max, $sal1);
	  $sal2Dif = calcularGrados($sal2Max, $sal2);
	  $satisfaccionDif = calcularGrados($satisfaccionMax, $satisfaccion);
	  $seg1Dif = calcularGrados($seg1Max, $seg1);
	  $seg2Dif = calcularGrados($seg2Max, $seg2);
	  $balan1Dif = calcularGrados($balan1Max, $balan1);
	  $balan2Dif = calcularGrados($balan2Max, $balan2);
		
	$vivienda = number_format((($v1Dif + $v2Dif + $v3Dif)/3),2);
	$ingresos = number_format((($i1Dif + $i2Dif)/2),2);
	$empleo = number_format((($emp1Dif + $emp2Dif + $emp3Dif + $emp4Dif)/4),2);
	$comunidadF = number_format((($comunidadDif)/1),2);
	$educacion = number_format((($edu1Dif + $edu2Dif + $edu3Dif)/3),2);
	$medio_ambiente = number_format((($med1Dif + $med2Dif)/2),2);
	$compromiso_civico = number_format((($comp1Dif + $comp2Dif)/2),2);
	$salud = number_format((($sal1Dif + $sal2Dif)/2),2);
	$satisfaccionF = number_format((($satisfaccionDif)/1),2);
	$seguridad = number_format((($seg1Dif + $seg2Dif)/2),2);
	$balance_vida_trabajo = number_format((($balan1Dif + $balan2Dif)/2),2);
	
	echo "<br>";
	echo "<h2 style='text-align: center' class='texto'>Valores difusos simplificado en caracteristicas</h2>";
	echo "<div width='900px' height='900px' align='center'>";
	echo "<table class='table' align='center' border='1' cellpadding='10px';>";
	echo "	<tr class='warning'>
				<td>Vivienda</td>
				<td>Ingresos</td>
				<td>Empleo</td>
				<td>Comunidad</td>
				<td>Educación</td>
				<td>Medio ambiente</td>
				<td>Compromiso cívico</td>
				<td>Salud</td>
				<td>Satisfacción</td>
				<td>Seguridad</td>
				<td>Balance vida-trabajo</td>
			</tr>
		 ";
	echo "	<tr class='info' style='text-align: center;'>
				<td>".$vivienda."</td>
				<td>".$ingresos."</td>
				<td>".$empleo."</td>
				<td>".$comunidadF."</td>
				<td>".$educacion."</td>
				<td>".$medio_ambiente."</td>
				<td>".$compromiso_civico."</td>
				<td>".$salud."</td>
				<td>".$satisfaccionF."</td>
				<td>".$seguridad."</td>
				<td>".$balance_vida_trabajo."</td>
			</tr>
		 ";
	echo "</table>";
	echo "</div>";	
	
	$calidadFinal = ($vivienda + $ingresos + $empleo + $comunidadF + $educacion + $medio_ambiente + $compromiso_civico + $salud + $satisfaccionF + $seguridad + $balance_vida_trabajo)/11;
	$calidadFinal = $calidadFinal;
	
	$valoresAct = array($vivienda, $ingresos, $empleo, $comunidadF, $educacion, $medio_ambiente, $compromiso_civico, $salud, $satisfaccionF, $seguridad, $balance_vida_trabajo);
	$valoresMax = array($calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal, $calidadFinal);
	echo "
		<br>
		<br>
		<div align='center'>
		<h2 class='texto'>Gráfica de comparación</h2>
		<img src='prueba.php?pais=".$pais."&vivienda=".$vivienda."&ingresos=".$ingresos."&empleo=".$empleo."&comunidad=".$comunidadF."&educacion=".$educacion."&medio_ambiente=".$medio_ambiente."&compromiso_civico=".$compromiso_civico."&salud=".$salud."&satisfaccion=".$satisfaccionF."&seguridad=".$seguridad."&balance_vida_trabajo=".$balance_vida_trabajo."&viviendaMax=".$calidadFinal."&ingresosMax=".$calidadFinal."&empleoMax=".$calidadFinal."&comunidadMax=".$calidadFinal."&educacionMax=".$calidadFinal."&medio_ambienteMax=".$calidadFinal."&compromiso_civicoMax=".$calidadFinal."&saludMax=".$calidadFinal."&satisfaccionMax=".$calidadFinal."&seguridadMax=".$calidadFinal."&balance_vida_trabajoMax=".$calidadFinal." class='img' />
		</div>
		
		<div align='center'>
			<h2 class='texto'>El indice promedio de calidad de vida para ".$pais." es:</h2>
			<h1 border=1>".number_format($calidadFinal*10,2)."</h1>
		</div>
	";
	
	
	echo "</body>";
	mysql_close($db);
?>