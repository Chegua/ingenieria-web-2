<?php

	/**
	 * 
	 */
	class Persona
	{
		protected $nombre;
		protected $apellido;
		protected $ahorros= 0;

		function __construct($nom,$ape)
		{
			$this->nombre= $nom;
			$this->apellido= $ape;
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function getAhorros()
		{
			return $this->ahorros;
		}

		public function comprar(Articulo $articulo)
		{
			$this->ahorros-=$articulo->getCosto();
			echo 'Has comprado el articulo '.$articulo->getNombre().' y tiene un costo de '.$articulo->getCosto().'$';
		}
	}


	
	class Empleado extends Persona
	{
		private $suledo= 0;

		public function cobrarSueldo()
		{
			$this->ahorros+= $this->sueldo;
		}

		public function setSueldo($valor)
		{
			$this->sueldo= $valor;
		}		
	}

	class Articulo{

		private $nombre;
		private $costo;

		public function __construct($nom='',$cost)
		{
			$this->nombre= $nom;
			$this->costo= $cost;
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function getCosto()
		{
			return $this->costo;
		}
	}

	$empleado= new Empleado("Jose","Gonzalez");

	$empleado->setSueldo(250);

	$empleado->cobrarSueldo();
	$empleado->cobrarSueldo();

	$telefono= new Articulo("telefono",150);


	echo $empleado->getAhorros().'$<br>';

	$empleado->comprar($telefono);

	echo '<br>'.$empleado->getAhorros().'$';






