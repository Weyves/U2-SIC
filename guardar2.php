<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="iconyou.png">
	<link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
	<title>Jack's</title>
	<style type="text/css">
		html{
			margin: 0px;
			background-color: rgb(184, 184, 184);
			background-image: url("wall2.jpg");
			width: 100%;
			background-size: 100%;
		}
		header{
			width: 100%;
			background-color: rgb(200, 58, 58);
			color: rgb(255, 255, 255);
			border: 2px solid rgb(153, 0, 0);
			border-radius: 20px;
		}
		div #inner{
			align: center;
			width: 270px;
			border: 20px solid rgb(153, 0, 0);
			padding: 25px;
			margin: 25px;
			border-radius: 20px;
			text-align: center;
			display: table;
			margin: 0 auto;
			margin-top: 20px;
			background-color: rgb(200, 58, 58);
		}
		body {

			background-repeat: no-repeat;
			background-size: 100%;
			background-repeat: repeat-y;
		}
		header #resal{
			color:rgb(221, 173, 21);
			font-weight:bold;
		}
	</style>
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
			$no = $_POST['nombre'];
			$ap = $_POST['apellido'];
			$ma = $_POST['mail'];
			$us = $_POST['user1'];
			$ps = $_POST['psw1'];
			$conexion = new Conexion();
			//Query de inserción
			$query = $conexion->prepare('INSERT INTO clientes VALUES(:Nombre, :Apellido, :Email, :usuario, :clave)');
			//Manejo de parametro
			$query->bindParam(':Nombre',$no);
			$query->bindParam(':Apellido',$ap);
			$query->bindParam(':Email',$ma);
			$query->bindParam(':usuario',$us);
			$query->bindParam(':clave',$ps);
			//Ejecución de los parámetros
			$query->execute();

		}
	}
	$conexion = null;
	//Se crea el objeto
	$el_user = new Users();
	$el_user->guarda();

 ?>
 <header>
	 <br>
	 <form action="new_session.php" method="POST">
		 <a href="index.php"><img src="logo.png" alt="logo" style="height: 120px; margin: -10px; margin-top: -20px; margin-bottom: -37px;"></a>
		 <label style="font-family: Baloo; font-size: 30px; text-shadow: -4px 0 rgb(153, 0, 0), 0 4px rgb(153, 0, 0), 4px 0 rgb(153, 0, 0), 0 -4px rgb(153, 0, 0);"><span class="resaltado" id="resal">Jack's</span> Burger</label>
		 <label style="font-family: Baloo; margin-left: 30%;">Usuario: </label>
		 <input type="text" name="user" style="border-radius: 10px; text-align: center;" placeholder=" Ingrese su usuario" autofocus required>
		 <label style="font-family: Baloo">Contraseña: </label>
		 <input type="password" name="psw" style="border-radius: 10px; text-align: center;" placeholder=" Ingrese su contraseña" autofocus required>
		 <button type="submit" name="validar">Ingresar</button>
	 </form>
	 <br><br>
	 <nav>

	 </nav>
 </header>
<br><br>
 <form action="guardar2.php" method="post">
	 <div id="outer" style="width:100%" class="boxed">
	 <div id="inner" class="boxed">
	 <h1 style="font-family: Baloo; color: rgb(245, 245, 245);">Registro Exitoso</h1>
	 <a href="inicio.php" style="font-family: Baloo; color: rgb(232, 232, 232);">Continuar al inicio de sesion...</a><br>
	 </div>
</div>
</form><br><br>
</body>
</html>
