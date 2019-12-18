<?php 

	class DataBase{
		public static function getData()
		{
			$usuarios = array(
			array(
				'nombre' => "Jose",
				'apellido' => "Acuña" 
			),

			array(
				'nombre' => "Luis",
				'apellido' => "Romero" 
			),

			array(
				'nombre' => "Juan",
				'apellido' => "Larez" 
			),

			array(
				'nombre' => "Maria",
				'apellido' => "Marquez" 
			),
		);

		return $usuarios;	
		}
	}

	
?>