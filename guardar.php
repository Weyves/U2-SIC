<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
<?php
	//mandar llamar la clase parra realizar la conexion con la base de datos
	require_once 'conexion.php';
	//se crea el objeto de conexion
	$conexion = new Conexion();
	class Users
	{
		public function guarda()
		{
			//traer datos del formulario
			$us = $_POST['user'];
			$ps = $_POST['psw'];
			$conexion = new Conexion();
			//Query de inserción
			$query = $conexion->prepare('INSERT INTO DAW VALUES(:usuario, :clave)');
			//Manejo de parametro
			$query->bindParam(':usuario',$us);
			$query->bindParam(':clave',$ps);
			//Ejecución de los parámetros
			$query->execute();
			echo "<h1>Registro Guardado</h1>";
		}
	}
	$conexion = null;
	//Se crea el objeto
	$el_user = new Users();
	$el_user->guarda();
	echo "<br> <a href='alta.php'>Regresar</a>";
 ?>
</body>
</html>
