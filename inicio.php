<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="icono1.png">
  	<link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
    <title>Iniciar Sesion</title>
  </head>
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
    ul{
      margin:0;
      padding:0;
    }
    header a{
      color:#ffffff;
      text-decoration:none;
      text-transform: uppercase;
      font-size:16px;
      font-family: Baloo;
    }

    header li{
      float:right;
      display:inline;
      padding: 0 20px 0 20px;
    }
    header nav{
      float:right;
      margin-top:-80px;
      margin-right: 20px;
    }
    header .actual a{
      color:rgb(221, 173, 21);
      font-weight:bold;
      text-shadow: -2px 0 rgb(153, 0, 0), 0 2px rgb(153, 0, 0), 2px 0 rgb(153, 0, 0), 0 -2px rgb(153, 0, 0);
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
  <body>
    <header>
   	 <br>
   	 <form action="index.php" method="POST">
   		 <a href="index.php"><img src="logo.png" alt="logo" style="height: 120px; margin: -10px; margin-top: -20px; margin-bottom: -37px;"></a>
       <label style="font-family: Baloo; font-size: 30px; text-shadow: -4px 0 rgb(153, 0, 0), 0 4px rgb(153, 0, 0), 4px 0 rgb(153, 0, 0), 0 -4px rgb(153, 0, 0);"><span class="resaltado" id="resal">Jack's</span> Burger</label>
   	 </form>
   	 <br><br>
     <nav>
       <ul>
         <li><a href="index.php">Inicio</a></li>
         <li><a href="#">Nosotros</a></li>
         <li><a href="#">Servicios</a></li>
         <li><a href="#">Contacto</a></li>
         <li class="actual"><a href="inicio.php">Iniciar Sesión</a></li>
       </ul>
  	 </nav>
   </header>
   <br><br>
   <form action="new_session.php" method="post">
  	 <div id="outer" style="width:100%" class="boxed">
  	 <div id="inner" class="boxed">
  	 <h1 style="font-family: Baloo; color: rgb(245, 245, 245);">Iniciar Sesion</h1>
     <label style="font-family: Baloo; color: rgb(232, 232, 232);">Usuario</label><br>
     <input type="text" name="user" placeholder="Ingrese su usuario" autofocus required><br><br>
     <label style="font-family: Baloo; color: rgb(232, 232, 232);">Contraseña<br>
     <input name="psw" id="psw" type="password" placeholder="Ingrese su contraseña"  /><br><br>
     <button type="submit" name="validar" style="font-family: Baloo; font-size: 20px; border-radius: 5px; align: center;">Iniciar Sesion</button>
     <br><br>
     <label>No tienes una cuenta?</label><br>
     <a href="completo.php">Registrate</a>
     </label><br><br>
  	 </div>
  </div>
  </form><br><br>
    </header>
    <footer>
  		<p>Jack's Burger, Copyright &copy; 2018</p>
  	</footer>
  </body>
</html>
