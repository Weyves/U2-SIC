<?php
require_once 'conexion.php';
?><!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="icon" href="icono1.png">
     <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
     <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
     <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
     <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
     <title>Jack's Burger - Perfil</title>
     <style type="text/css">
     html{
       margin: 0px;
       background-color: rgb(184, 184, 184);
       background-image: url("wall2.jpg");
       width: 100%;
       background-size: 100%;
       font-family: Baloo;
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
     #cabecera{
       min-height:400px;
       text-align:center;
       color:#ffffff;
       background-color: rgba(46, 46, 46, 0.57);
       font-family: Baloo;
     }

     #cabecera h1{
       margin-top:50px;
       font-size:55px;
       margin-bottom:10px;
     }

     #cabecera p{
       font-size:20px;
     }
     footer{
       padding:20px;
       margin-top:20px;
       color:#ffffff;
       background-color:rgb(200, 58, 58);
       text-align: center;
     }
     div #inner{
       background-color: rgba(200, 58, 58, 0.87);
       width: 80%;
       height: 1000px;
       border: 10px solid rgb(153, 0, 0);
       border-radius: 20px;
       color: #ffffff;
     }
     div .imagperf{
       align: left;
       margin-left: -70%;
     }
     div .info{
       margin-top: -7%;
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
       <li><a href="inicio.php">Iniciar Sesión</a></li>
       <li class="actual"><a href="profile.php">Mi perfil</a></li>
     </ul>
   </nav>
 </header><br>
<div id="outer" style="width:100%" class="boxed">
 <div id="inner" class="boxed">
   <h1>Mi perfil</h1>
   <div class="imagperf">
     <img id="blah" src="#" alt="Sin imagen de perfil" /><br>
     <input type='file' onchange="readURL(this);" />
   </div>
   <div class="info">
     <?php

   	$conexion = new Conexion();
   			$query = $conexion->prepare('SELECT * FROM clientes where (usuario=:usuario)');
   			$query->bindParam(':usuario',$_SESSION['usuario']);
   			$query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
      echo "<br>";
     echo "Nombre: ".$result['Nombre']."<br><br>";
     echo "Apellido: ".$result['Apellido']."<br><br>";
     echo "Email: ".$result['Email']."<br><br>";
     echo "Usuario: ".$result['usuario']."<br><br>";
    ?>
   </div>
 </div>
</div>

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#blah')
            .attr('src', e.target.result)
            .width(200)
            .height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

 </script>
 <footer>
   <p>Jack's Burger, Copyright &copy; 2018</p>
 </footer>
</body>
</html>
