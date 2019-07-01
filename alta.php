<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Alta</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			color: white;
			text-align: center;
			background-color: #46008E;
		}
	</style>
</head>
<body>
<form action="guardar.php" method="post">
	<label>Usuario</label><br>
	<input type="text" name="user"><br>
	<label>Password</label><br>
	<input type="password" name="psw"><br><br>
	<button type="submit">Guardar</button>
	<button type="reset">Limpiar</button>
</form>
</body>
</html>