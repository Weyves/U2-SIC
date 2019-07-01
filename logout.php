<!DOCTYPE html>
<html>
<head>
	<title>Log Out</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			text-align: center;
			background-color: #0045F4;
			color: white;
		}
	</style>
</head>
<body>
	<?php 
		session_start();
		session_destroy();
		echo "<h1>Sesión cerrada de manera satisfactoria</h1>";
		echo "<br><a href = 'login.php'>Regresar</a>";
	 ?>
</body>
</html>