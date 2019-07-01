<?php
require_once 'conexion.php';
?><!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icono1.png">
	<link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
	<title>Nueva Sesión</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		//Se inicializa una sesión
		//Se manda a llamar el archivo de conexión
		//Se verifica el boton de validar
		if (isset($_POST['validar']))
		{
			$us = $_POST['user'];
			$ps = $_POST['psw'];

			//Se crea la conexión
			$conexion = new Conexion();
			//Query de consulta
			$query = $conexion->prepare('SELECT * FROM clientes WHERE usuario = :usuario AND clave = :clave');
			$query->bindParam(':usuario',$us);
			$query->bindParam(':clave',$ps);

			$query->execute();

			$count = $query->rowCount();

			if ($count )
			{
				$_SESSION['usuario']=$us;
				echo "If you are not redirected automatically, follow this <a href='usuario.php'>link to example</a>.";
			}
			else
			{
				echo "Verifica las credenciales de acceso";
				echo "<br><a href = 'inicio.php'>Regresar</a>";
			}
		}
	 ?>


</body>
</html>
