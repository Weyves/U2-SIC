<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="icono1.png">
  	<link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
    <title>Jack's Burger - Inicio</title>
  </head>
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
    .slider {
      width: 100%;
      height: 50%;
      margin: auto;
      overflow: hidden;
      align:center;
    }

    .slider ul {
      display: flex;
      padding: 0;
      width: 400%;
      animation: cambio 20s infinite alternate linear;
    }

    .slider li {
      width: 100%;
      list-style: none;
    }

    .slider ul li img {
      width: 100px
      height:250px;
    }
    @keyframes cambio {
      0% {margin-left: 0;}
      20% {margin-left: 0;}

      25% {margin-left: -100%;}
      45% {margin-left: -100%;}

      50% {margin-left: -200%;}
      70% {margin-left: -200%;}

      75% {margin-left: -300%;}
      100% {margin-left: -300%;}
    }
    .contenedor{
      width:100%;
      margin:auto;
      overflow:hidden;
    }
    #cajas{
      margin-top:20px;
      background-color: rgba(255, 255, 255, 0.81);
    }

    #cajas .caja{
      float:left;
      text-align: center;
      width:30%;
      padding:10px;
    }

    #cajas .caja img{
      width:150px;
      height: 150px;
      border-radius: 5px;
      border: 5px solid rgb(200, 58, 58);
    }
    #boletin h1{
      margin-top:40px;
      float:left;
    }

    #boletin button{
      display:block;
      width:100%;
    }

    #boletin form input[type="email"]{
      width:100%;
      margin-bottom:5px;
    }
    input, textarea{
      width: 98%;
    }
    #boletin{
      padding:15px;
      color:#ffffff;
      background:#24282b;
    }

    #boletin form {
      float:right;
      margin-top:15px;
    }

    #boletin input[type="email"]{
      padding:4px;
      height:25px;
      width:250px;
    }
    .contenedor{
      width:100%;
      margin:auto;
      overflow:hidden;
    }
    input, textarea{
      width: 100%;
      height: 35px;
      border: 1px solid gray;
      margin-bottom: 5px;
    }

    textarea{
      height: 120px;
    }

    input[type='submit']{
      background-color: #e8491d;
      color: #fff;
    }
    footer{
      padding:20px;
      margin-top:20px;
      color:#ffffff;
      background-color:rgb(200, 50, 50);
      text-align: center;
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
         <li class="actual"><a href="">Inicio</a></li>
         <li><a href="#">Nosotros</a></li>
         <li><a href="#">Servicios</a></li>
         <li><a href="#">Contacto</a></li>
         <li><a href="inicio.php">Iniciar Sesión</a></li>
         <li><a href="usuario.php">Mi perfil</a></li>
       </ul>
  	 </nav>
   </header>
   <section id="cabecera">
		<div class="contenedor">
			<h1>Hamburguesas, alitas y cheve</h1>
      <center><div  class="slider">
          <ul >
            <li>
      <img  src="http://www.stickpng.com/assets/images/58824b33e81acb96424ffab9.png" width="350" height="350" >
     </li>
            <li>
      <img src="http://bk-latam-prod.s3.amazonaws.com/sites/burgerking.cl/files/BK_ProductDetail-hamburguesa_italiana_doble.png" width="350" height="350" >
    </li>
            <li>
      <img src="https://cdn5.bobsfa.com.br/assets/cardapio/produtos/picanha-barbecue-200g.g.png" width="350" height="350" >
    </li>
            <li>
      <img src="http://static.wixstatic.com/media/de43cd_68578afc2d42417ea16ea1c72432cc19~mv2.png/v1/fill/w_783,h_593,al_c,usm_0.66_1.00_0.01/de43cd_68578afc2d42417ea16ea1c72432cc19~mv2.png" width="350" height="350" >
    </li>
          </ul>
        </div></center>
		</div>
   </section><br>
   <section id="cajas">
 		<div class="contenedor"><br>
 			<div class="caja">
 				<img src="img/burg1.jpg">
 				<h3>Burgers</h3>
 				<p>Hamburguesas bañadas en salsa, con piña, tocino, pepinillos, tocino, aros de cebolla, más tocino..</p>
 			</div>
 			<div class="caja">
 				<img src="img/wing1.jpg">
 				<h3>Wings</h3>
 				<p>Alitas bañadas en una amplia variedad de salsas.</p>
 			</div>
 			<div class="caja">
 				<img src="img/beer1.jpg">
 				<h3>Beer</h3>
 				<p>La mejor cerveza nacional e internacional.</p>
 			</div>
 		</div>
 	</section><br><br>
  <section id="boletin">
		<div class="contenedor">
			<h1>Suscribete</h1>
			<form>
				<input type="email" name="email" placeholder="ingrese tu e-mail">
				<button type="submit" class="boton1" id="but111">Suscribete</button>
			</form>
		</div>
	</section>
  <footer>
		<p>Jack's Burger, Copyright &copy; 2018</p>
	</footer>
  </body>
</html>
