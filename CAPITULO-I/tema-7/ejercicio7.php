<?php 

	interface iVehiculos{
		public function desplazar();
	}
	
	
	abstract class Vehiculos implements iVehiculos
	{
		protected $cantidadRuedas;

		public function __construct($rueda='')
		{
			$this->cantidadRuedas= $rueda;
		}
		
		
		public function desplazar()
		{
			echo "Me estoy desplazando";
		}
	}

	
	class AutoDeportivo extends Vehiculos
	{
		
		function __construct($rueda='')
		{
			parent::__construct($rueda);
		}

		public function desplazar()
		{
			echo "Me estoy desplazando en ".$this->cantidadRuedas.' ruedas';
		}
	}

	class Moto extends Vehiculos
	{
		
		function __construct($rueda='')
		{
			parent::__construct($rueda);
		}

		public function desplazar()
		{
			echo "Voy por la via en ".$this->cantidadRuedas.' ruedas';
		}
	}

	$auto= new AutoDeportivo(4);

	$moto= new Moto(2);

	$auto->desplazar();

	$moto->desplazar();


 ?>