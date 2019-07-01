<!DOCTYPE html>
<html>
<head>
	<title>Solicitud</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<h1>Solicitud</h1>

	<form action="solicitudinfo.php" method="post">
		<fieldset>
			<legend>Datos Personales</legend>
			Apellidos y Nombre:
			<input type="text" name="nombre" size="40"><br>
			Número de Credencial de Elector:
			<input type="text" name="numeroid" size="15"><br>
			Fecha de Nacimiento:
			<input type="date" name="fechanacim"><br>
			Telefono:
			<input type="text" name="phnmb"><br>
			Foto Personal:
			<input type="file" name="foto">
		</fieldset>
		<br>
		<fieldset>
			<legend>Datos Académicos</legend>
			Grado de Estudios:
			<input type="text" name="grado" size="30"><br>
			Institución:
			<input type="text" name="institucion" size="30"><br>
			Año de Graduación:
			<input type="date" name="anio"><br>
			Ciudad:
			<input type="text" name="ciudad" size="30"><br>
			Formación que has recibido y tipo de titulación que has obtenido al finalizar <br>	
			<textarea name="descripcion" rows="5" cols="70"></textarea>
		</fieldset>
		<br>
		<fieldset>
			<legend>Idiomas</legend>
			Nivel de Idiomas:<br><br>
			Inglés: 
			<input type="radio" name="ingles" value="1">1	
			<input type="radio" name="ingles" value="2">2
			<input type="radio" name="ingles" value="3">3
			<input type="radio" name="ingles" value="4">4
			<input type="radio" name="ingles" value="5">5
			<br>
			Alemán:
			<input type="radio" name="aleman" value="1">1
			<input type="radio" name="aleman" value="2">2
			<input type="radio" name="aleman" value="3">3
			<input type="radio" name="aleman" value="4">4
			<input type="radio" name="aleman" value="5">5
			<br>
			Japones:
			<input type="radio" name="japones" value="1">1
			<input type="radio" name="japones" value="2">2
			<input type="radio" name="japones" value="3">3
			<input type="radio" name="japones" value="4">4
			<input type="radio" name="japones" value="5">5
		</fieldset>
		<br>
		<fieldset>
			<legend>Cursos</legend>
			Nombre del Curso: 
			<input type="text" name="cursonombre" size="30"><br>
			Plataforma:
			<input type="text" name="cursoplataforma" size="30"><br>
			Organización: 
			<input type="text" name="cursoorganizacion" size="30"><br>
			Fecha Inicio:
			<input type="date" name="cursofechainicio"><br>
			Fecha Finalizado:
			<input type="date" name="cursofechafin"><br>
			Horas del Curso:
			<input type="text" name="cursohoras">
		</fieldset>
		<br>
		<fieldset>
			<legend>Experiencia</legend>
			Conocimiento de Office: <br><br>
			<input type="checkbox" name="word">Word <br>
			<input type="checkbox" name="excel">Excel <br>
			<input type="checkbox" name="powerpoint">PowerPoint <br>
			<input type="checkbox" name="access">Access <br><br>
			Otro: <br>
			<textarea name = "xpotro" rows="5" cols="70"></textarea>	
		</fieldset>
		<br>
		<button type="submit" value="Enviar">Enviar</button>
	</form>
</body>
</html>