<?php /**
*
*/
session_start();
class conexion extends PDO
{
	private $tipo_de_base='mysql';
	private $host='sistemas.nlared.com';
	private $nombre_de_base='jack';
	private $usuario ='root';
	private $contraseña='';
	function __construct()
	{
		//SOBRESCRIBO EL METODO DE LA CLASE PDO
		try {
			parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,$this->usuario,$this->contraseña);
		} catch (PDOException $e) {
			echo "Ha surgido un error y no se puede conectar a una base de datos".$e->getMessage();
			exit();

		}
	}
} ?>
</body>
</html>
