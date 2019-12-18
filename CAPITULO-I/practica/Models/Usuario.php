<?php 
	require_once 'DataBase.php';
	class Usuario{
		private $nombre;
		private $apellido;
		private $edad;


		public function __construct($nombre='',$apellido='',$edad='')
		{
			$this->nombre= $nombre;
			$this->apellido= $apellido;
			$this->edad= $edad;

		}

		public function setAtribute($key,$value)
		{
			$this->$key=$value;
		}

		public function list()
		{
			$db= DataBase::getInstance();
			$sql="SELECT * FROM usuarios";
			$consulta= $db->prepare($sql);
			//$consulta->bindParam('',);
			$consulta->execute();
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

			return $datos;
		}

		public function ver()
		{
			$datos= DataBase::getData();
			foreach ($datos as $value) {
				if ($value['nombre']== $this->nombre) {
					$encontrado= $value;
				}
			}
			return $encontrado;
		}

		public function comprobarEdad()
		{
			if ($this->edad>=18) {
				$respuesta= 'El usuario '.$this->nombre.' '.$this->apellido.' es mayor de edad';
			}else{
				$respuesta= 'El usuario '.$this->nombre.' '.$this->apellido.' es menor de edad';

			}

			return $respuesta;
		}

	}

?>