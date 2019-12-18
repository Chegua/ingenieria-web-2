<?php 
	
	/**
	 * 
	 */
	class Persona
	{
		public $nombre;
		public $apellido;
		
		function __construct($n,$a)
		{
			$this->nombre= $n;
			$this->apellido= $a;
		}

		public function mostrarNombreApellido()
		{
			echo $this->nombre.' '.$this->apellido;
		}

		public function comer(Comida $comida)
		{
			echo 'Estoy comiendo '.$comida->nombre;
		}
	}

	
	class Comida
	{
		public $nombre;
		
		function __construct($n)
		{
			$this->nombre= $n;

		}
	}

	$manzana= new Comida('Manzana');

	$persona= new Persona('Maria','Rodriguez');



	echo $persona->comer($manzana);



?>