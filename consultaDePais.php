<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>Indices de calidad de vida</title>
	<meta charset="UTF-8">
	<style>
		.thumbnail{
			height: 230px;
		}
	</style>
</head>
<body style="background: -webkit-radial-gradient(center, ellipse cover, rgba(169,3,41,1) 0%, rgba(235,127,152,0.78) 57%, rgba(109,0,25,0.65) 89%, rgba(109,0,25,0.61) 100%);">
<?php
	//require('config.php');
	define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    $db = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
    if(!$db){
   	die('No se pudo conectar: ' . mysqli_error());
    }
	$sql = 'SELECT
	`id`,
	`pais`
	FROM `valores`
	Order by `pais`';
	mysql_select_db('indice_de_calidad');
	$retval = mysql_query( $sql, $db );
	if(! $retval )
	{
	  die('No se pudieron obtener datos: ' . mysql_error());
	}
	
	echo "<h2 style='text-align: center;' class='texto'>Selecciona un país para conocer su Indice de calidad de vida</h2>";
	echo "<br>";
	echo "<form action='resultado.php' method='get'>";
	echo "<div style='overflow-y: scroll; width: 900px; height: 350px; text-align: center; margin: auto;'>";
	echo "<table align='center'>";
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		echo "<tr>";	
		echo "
		<td><input type='radio' name='paisSeleccionado' value='{$row['id']}' required='true'></td>
		<td>{$row['pais']}</td>
		";
		echo "<tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "<br><br><br>";
	echo "<div align='center'>
	<input type='submit' value='Acceder' class='btn btn-primary btn-lg'>&nbsp;&nbsp; | &nbsp;&nbsp;<a href='agregar.php' class='btn btn-warning btn-lg'>Agregar un país</a>
	</div>";
	echo "</form>";
	
	echo "
		<br><br>
		
		<h2 style='text-align: center;' class='texto'>Más información</h2>
		
		<div class='row' style='margin-left: 20%; margin-right: 20%;'>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>VIVIENDA</h3>
		        <p>Conoce mas acerca del indice de calidad de vida que compone vivienda</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/housing-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>INGRESOS</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Ingresos</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/income-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>EMPLEO</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Empleo</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/jobs-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>COMUNIDAD</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Comunidad</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/community-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>EDUCACION</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Educacion</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/education-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>MEDIO AMMBIENTE</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Medio ambiente</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/environment-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>COMPROMISO CIVICO</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Compromiso cívico</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/civic-engagement-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>SALUD</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Salud</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/health/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>SATISFACCION</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Satisfacción</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/life-satisfaction-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>SEGURIDAD</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Seguridad</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/safety-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		  
		  <div class='col-sm-6 col-md-4'>
		    <div class='thumbnail'>
		      <div class='caption' style='text-align: center'>
		        <h3>BALANCE VIDA-TRABAJO</h3>
		        <p>Conoce mas acerca del índice de calidad de vida que compone Balance vida-trabajo</p>
		        <p><a href='http://www.oecdbetterlifeindex.org/es/topics/work-life-balance-es/' target='_Blank' class='btn btn-primary' role='button'>Conocer mas</a></p>
		      </div>
		    </div>
		  </div>
		</div>
		
	
	";
	
	echo "</body>";
	mysql_close($db);
?>
</body>
</html>