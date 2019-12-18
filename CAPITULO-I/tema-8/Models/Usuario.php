<?php 
	require_once 'DataBase.php';
	class Usuario{
		private $nombre;
		private $apellido;

		public function __construct($nombre='',$apellido='')
		{
			$this->nombre= $nombre;
			$this->apellido= $apellido;
		}

		public function list()
		{
			$datos= DataBase::getData();
			return $datos;
		}

	}

?>