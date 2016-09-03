<?php
	$pais = $_GET['nombrePais'];
	$v1 = $_GET['v1'];
	$v2 = $_GET['v2'];
	$v3 = $_GET['v3'];
	$i1 = $_GET['i1'];
	$i2 = $_GET['i2'];
	$emp1 = $_GET['emp1'];
	$emp2 = $_GET['emp2'];
	$emp3 = $_GET['emp3'];
	$emp4 = $_GET['emp4'];
	$comunidad = $_GET['comunidad'];
	$edu1 = $_GET['edu1'];
	$edu2 = $_GET['edu2'];
	$edu3 = $_GET['edu3'];
	$med1 = $_GET['med1'];
	$med2 = $_GET['med2'];
	$comp1 = $_GET['comp1'];
	$comp2 = $_GET['comp2'];
	$sal1 = $_GET['sal1'];
	$sal2 = $_GET['sal2'];
	$satisfaccion = $_GET['satisfaccion'];
	$seg1 = $_GET['seg1'];
	$seg2 = $_GET['seg2'];
	$balan1 = $_GET['balan1'];
	$balan2 = $_GET['balan2'];
	
	//Cómo es un porcentaje y mientras menor sea, se le añade el complemento
	$v3 = 100.00 - $v3; 
	$emp4 = 100.00 - $emp4;
	$emp2 = 100.00 - $emp2;
	$med1 = 100.00 - $med1;
	$seg2 = 100.00 - $seg2;
	$balan1 = 100.00 - $balan1;
	
	define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    $db = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
    if(!$db){
   	die('No se pudo conectar: ' . mysqli_error());
    }
	$sql = 'INSERT
INTO
  `valores`(
    `id`,
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
  )
VALUES(
  null,
  "'.$pais.'",
  '.$v1.',
  '.$v2.',
  '.$v3.',
  '.$i1.',
  '.$i2.',
  '.$emp1.',
  '.$emp2.',
  '.$emp3.',
  '.$emp4.',
  '.$comunidad.',
  '.$edu1.',
  '.$edu2.',
  '.$edu3.',
  '.$med1.',
  '.$med2.',
  '.$comp1.',
  '.$comp2.',
  '.$sal1.',
  '.$sal2.',
  '.$satisfaccion.',
  '.$seg1.',
  '.$seg2.',
  '.$balan1.',
  '.$balan2.'
)';
	mysql_select_db('indice_de_calidad');
	$retval = mysql_query( $sql, $db );
	if(! $retval )
	{
	  die('No se pudieron ingresar los datos: ' . mysql_error());
	}
	else{
		echo "<h2>Datos actualizados exitosamente</h2>";
	}
	mysql_close($db);
?>