<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clases</title>
  </head>
  <body>
<?php
class Persona{
  private $nom;
  public function inicializa($n){
    $this->nom= $n;
  }
  public function imprimir(){
    echo $this->nom;
    echo "<br>";
  }
}
$p1= new Persona();
$p1->inicializa('Diego');
$p1->imprimir();
$p2= new Persona();
$p2->inicializa('Juanpa');
$p2->imprimir();
$p3= new Persona();
$p3->inicializa('Tu');
$p3->imprimir();
$p4= new Persona();
$p4->inicializa('Yo');
$p4->imprimir();
$p5= new Persona();
$p5->inicializa('Saboo Mafoo');
$p5->imprimir();
?>
<?php
echo "<h1> Metodo Constructor</h1>";
class titulo{
  private $tit;
  private $ubic;
  public function __construct($t,$ub){
    $this->tit=$t;
    $this->ubic=$ub;
  }
  public function imprime(){
    echo '<div style="font-size:30px; text-align:'.$this->ubic.'">';
    echo $this->tit;
    echo "</div>";
  }
}
$muestra=new titulo('Bienvenidos al curso de DAW','center');
$muestra->imprime();
 ?>
 <?php
  class operacion{
    protected $valor1;
    protected $valor2;
    protected $resultado;
    public function cargar1($v){
      $this->valor1=$v;
    }
    public function cargar2($v){
      $this->valor2=$v;
    }
    public function imprimirresul(){
      echo $this-> resultado.'<br>';
    }
  }
  /**
   *
   */
  class suma extends operacion
  {

    public function operar()
    {
      // code...
      $this->resultado=$this-> valor1 + $this-> valor2;
    }
  }
  class resta extends operacion
  {

    public function operar()
    {
      // code...
      $this->resultado=$this-> valor1 - $this-> valor2;
    }
  }
  class division extends operacion
  {

    public function operar()
    {
      // code...
      $this->resultado=$this-> valor1 / $this-> valor2;
    }
  }
  class multiplicacion extends operacion
  {

    public function operar()
    {
      // code...
      $this->resultado=$this-> valor1 * $this-> valor2;
    }
  }
  $suma=new suma();
  $suma->cargar1(5);
  $suma->cargar2(10);
  $suma->operar();
  echo "El resultado de la suma es: ";
  $suma->imprimirresul();

  $resta=new resta();
  $resta->cargar1(5);
  $resta->cargar2(10);
  $resta->operar();
  echo "El resultado de la resta es: ";
  $resta->imprimirresul();

  $division=new division();
  $division->cargar1(5);
  $division->cargar2(10);
  $division->operar();
  echo "El resultado de la division es: ";
  $division->imprimirresul();

  $multiplicacion=new multiplicacion();
  $multiplicacion->cargar1(5);
  $multiplicacion->cargar2(10);
  $multiplicacion->operar();
  echo "El resultado de la multiplicacion es: ";
  $multiplicacion->imprimirresul();
  ?>
  </body>
</html>
