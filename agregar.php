<html>
	<head>
		<title>Agregar pais</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<style>
		a{
			decoration: none;
		}
		a:hover{
			decoration: none;
		}
	</style>
	<title>Indices de calidad de vida</title>
</head>
<body style='background: -webkit-radial-gradient(center, ellipse cover, rgba(238,255,186,1) 0%, rgba(197,245,133,0.63) 44%, rgba(145,232,66,0.63) 100%);'>
<div align='center'>
<form action="agregado.php" method="get">  
	<br><br>
	<p>* para conocer mas sobre los indicadores, haz clic sobre una caracteristica</p>
	<br><br>
  <b>Pais</b> <input type="text" name="nombrePais" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/housing-es/" target="_blank"><b>Vivienda</b></a>
  <br><br>
  Habitaciones por persona: <input type="number" min="0" step="any" name="v1" value="" required="true" >
  <br><br>
  Vivienda con instalaciones basicas: <input type="number" min="0" step="any" name="v2" value="" required="true" >
  <br><br>
  Gasto en vivienda: <input type="number" min="0" step="any" name="v3" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/income-es/" target="_blank"><b>Ingresos</b></a>
  <br><br>
  Ingreso familiar disponible: <input type="number" min="0" step="any" name="i1" value="" required="true">
  <br><br>
  Patrimonio financiero familiar: <input type="number" min="0" step="any" name="i2" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/jobs-es/" target="_blank"><b>Empleo</b></a>
  <br><br>
  Tasa de empleo: <input type="number" min="0" step="any" name="emp1" value="" required="true">
  <br><br>
  Tasa de empleo a largo plazo: <input type="number" min="0" step="any" name="emp2" value="" required="true">
  <br><br>
  Ingresos personales: <input type="number" min="0" step="any" name="emp3" value="" required="true">
  <br><br>
  Seguridad en el empleo: <input type="number" min="0" step="any" name="emp4" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/community-es/" target="_blank"><b>Comunidad</b></a>
  <br><br>
  Calidad de apoyo social: <input type="number" min="0" step="any" name="comunidad" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/education-es/" target="_blank"><b>Educacion</b></a>
  <br><br>
  Nivel de educacion: <input type="number" min="0" step="any" name="edu1" value="" required="true">
  <br><br>
  Competencias de estudiantes en matematicas, lecturas y ciencias: <input type="number" min="0" step="any" name="edu2" value="" required="true">
  <br><br>
  Anios de educacion: <input type="number" min="0" step="any" name="edu3" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/environment-es/" target="_blank"><b>Medio ambiente</b></a>
  <br><br>
  Contaminacion del aire: <input type="number" min="0" step="any" name="med1" value="" required="true">
  <br><br>
  Calidad del agua: <input type="number" min="0" step="any" name="med2" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/civic-engagement-es/" target="_blank"><b>Compromiso civico</b></a>
  <br><br>
  Participacion electoral: <input type="number" min="0" step="any" name="comp1" value="" required="true">
  <br><br>
  Participacion de los interesados en la elaboracion de regulaciones: <input type="number" min="0" step="any" name="comp2" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/health/" target="_blank"><b>Salud</b></a>
  <br><br>
  Esperanza de vida: <input type="number" min="0" step="any" name="sal1" value="" required="true">
  <br><br>
  Salud segun informan las personas: <input type="number" min="0" step="any" name="sal2" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/life-satisfaction-es/" target="_blank"><b>Satisfaccion</b></a>
  <br><br>
  Satisfaccion ante la vida: <input type="number" min="0" step="any" name="satisfaccion" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/safety-es/" target="_blank"><b>Seguridad</b></a>
  <br><br>
  Sentimiento de seguridad al caminar solos por la noche: <input type="number" min="0" step="any" name="seg1" value="" required="true">
  <br><br>
  Tasa de homicidios: <input type="number" min="0" step="any" name="seg2" value="" required="true">
  <br><br>
  <a href="http://www.oecdbetterlifeindex.org/es/topics/work-life-balance-es/" target="_blank"><b>Balance vida-trabajo</b></a>
  <br><br>
  Empleados que trabajan muchas horas: <input type="number" min="0" step="any" name="balan1" value="" required="true">
  <br><br>
  Tiempo destinado al ocio y el cuidado personal: <input type="number" min="0" step="any" name="balan2" value="" required="true">
  <br><br>
  
  <input type="submit" value="Agregar" class="btn btn-success">  
</form>
</div>
</html>

