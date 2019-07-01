<!DOCTYPE html>
<html>
<head>
	<title>Información Solicitud</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	echo "<h1>Datos Personales</h1>";
	echo "Nombre: ".$_REQUEST['nombre']."<br>";
	echo "Numero INE: ".$_REQUEST['numeroid']."<br>";
	echo "Fecha de Nacimiento: ".$_REQUEST['fechanacim']."<br>";
	echo "Telefono: ".$_REQUEST['phnmb']."<br><br>";
#####################################################
	echo "<h1>Datos academicos</h1>";
	echo "Grado: ".$_REQUEST['grado']."<br>";
	echo "Institución: ".$_REQUEST['institucion']."<br>";
	echo "Año de Graduacion: ".$_REQUEST['anio']."<br>";
	echo "Ciudad: ".$_REQUEST['ciudad']."<br>";
	echo "Formación: ".$_REQUEST['descripcion']."<br>";
#####################################################
	echo "<h1>Nivel de Idiomas</h1>";
	if($_REQUEST['ingles'] == "1"){
		$ingles = 1;
	}elseif ($_REQUEST['ingles'] == "2") {
		$ingles = 2;
	}elseif ($_REQUEST['ingles'] == "3") {
		$ingles = 3;
	}elseif ($_REQUEST['ingles'] == "4") {
		$ingles = 4;
	}elseif ($_REQUEST['ingles'] == "5") {
		$ingles = 5;
	}
	echo "Ingles: ".$ingles."/5<br>";
	if($_REQUEST['aleman'] == "1"){
		$aleman = 1;
	}elseif ($_REQUEST['aleman'] == "2") {
		$aleman = 2;
	}elseif ($_REQUEST['aleman'] == "3") {
		$aleman = 3;
	}elseif ($_REQUEST['aleman'] == "4") {
		$aleman = 4;
	}elseif ($_REQUEST['aleman'] == "5") {
		$aleman = 5;
	}
	echo "Aleman: ".$aleman."/5<br>";
	if($_REQUEST['japones'] == "1"){
		$japones = 1;
	}elseif ($_REQUEST['japones'] == "2") {
		$japones = 2;
	}elseif ($_REQUEST['japones'] == "3") {
		$japones = 3;
	}elseif ($_REQUEST['japones'] == "4") {
		$japones = 4;
	}elseif ($_REQUEST['japones'] == "5") {
		$japones = 5;
	}
	echo "Japones: ".$japones."/5<br>";
###################################################
	echo "<h1>Cursos</h1>";
	echo "Nombre del curso: ".$_REQUEST['cursonombre']."<br>";
	echo "Plataforma: ".$_REQUEST['cursoplataforma']."<br>";
	echo "Organización: ".$_REQUEST['cursoorganizacion']."<br>";
	echo "Fecha Inicio: ".$_REQUEST['cursofechainicio']."<br>";
	echo "Fecha Finalizado: ".$_REQUEST['cursofechafin']."<br>";
	echo "Horas del curso: ".$_REQUEST['cursohoras']."<br>";
###################################################
	echo "<h1>Experiencia</h1>";
	echo "Conocimiento de Office";
	echo "Otro: ";
 ?>
</body>
</html>
