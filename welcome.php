<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			text-align: center;
			background-color: #7600BA;
			color: white;
		}
	</style>
</head>
<body>
	<h3>Bienvenido</h3>
	<?php 
		session_start();
		echo $_SESSION['usuario'];
		echo "<br><a href = 'logout.php'>Cerrar Sesión</a>";
	 ?>
</body>
</html>