<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			text-align: center;
			background-color: #353535;
			color: white;
		}

		form{
			margin-top: 15%;
		}
	</style>
</head>
<body>
	<form action="new_session.php" method="POST">
		<label>Usuario</label><br>
		<input type="text" name="user" placeholder="Ingrese su usuario" autofocus required><br><br>
		<label>Contraseña</label><br>
		<input type="password" name="psw" placeholder="Ingrese su contraseña" autofocus required><br><br>
		<button type="submit" name="validar">Ingresar</button>
		<button type="reset" name="clear">Limpiar</button>
	</form>
</body>
</html>
