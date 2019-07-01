<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="icono1.png">
    <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
    <title>Jack's Burger - Registro</title>
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
      footer{
        padding:20px;
        margin-top:20px;
        color:#ffffff;
        background-color:rgb(200, 50, 50);
        text-align: center;
        font-family: Baloo;
      }
    </style>
  </head>
  <body>
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

    </header><br><br>
    <form action="guardar2.php" method="post">
      <div id="outer" style="width:100%" class="boxed">
      <div id="inner" class="boxed">
      <h1 style="font-family: Baloo; color: rgb(245, 245, 245);">Registrate</h1>
      <label style="font-family: Baloo; color: rgb(232, 232, 232);">Nombre</label><br>
      <input type="text" name="nombre" placeholder="Ingrese su nombre" autofocus required><br><br>
      <label style="font-family: Baloo; color: rgb(232, 232, 232);">Apellido</label><br>
      <input type="text" name="apellido" placeholder="Ingrese su apellido" autofocus required><br><br>
      <label style="font-family: Baloo; color: rgb(232, 232, 232);">E-mail</label><br>
      <input type="text" name="mail" placeholder="Ingrese su e-mail" autofocused required><br><br>
      <label style="font-family: Baloo; color: rgb(232, 232, 232);">Usuario</label><br>
      <input type="text" name="user1" placeholder="Ingrese su usuario" autofocus required><br><br>
      <label style="font-family: Baloo; color: rgb(232, 232, 232);">Contraseña<br>
      <input name="psw1" id="psw1" type="password" placeholder="Ingrese su contraseña" onkeyup='check();' />
      </label><br><br>
      <label style="font-family: Baloo; color: rgb(232, 232, 232);">Confirma contraseña<br>
      <input type="password" name="confirm_password" id="confirm_password" placeholder="Repita su contraseña" onkeyup='check();' /><br>
      <span id='message' style="text-shadow: -1px 0 white, 0 .5px white, .5px 0 white, 0 -.5px white;"></span>
    </label><br>
      <button type="submit" name="validar2" style="font-family: Baloo; font-size: 20px; border-radius: 5px; align: center;">Registrar</button>
      <script type="text/javascript">
      var check = function() {
  if (document.getElementById('psw1').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Correcto';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Verifica la contrasena';
  }
}
      </script>
</div>
</div>
</form><br><br>
<footer>
  <p>Jack's Burger, Copyright &copy; 2018</p>
</footer>
  </body>
</html>
