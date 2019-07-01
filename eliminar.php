<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eliminar</title>
  </head>
  <body>
    <?php
      require_once 'conexion.php';
      $conexion = new Conexion();
      class Users{
        public function elimina(){
          $us= $_POST['user'];
          $conexion= new Conexion();
          $query= $Conexion->prepare('DELETE from DAW WHERE USER =:usuario');
          $query->bindParam(':usuario', $us);
          $query-> execute();
          echo "<h1>El usuario ha sido eliminado</h1>";
          }
      }
      $conexion=null;
      $el_user= new Users($us);
      $el_user->elimina();
      echo "<br><a href= 'baja.php'>Regresar</a>";
    ?>
  </body>
</html>
