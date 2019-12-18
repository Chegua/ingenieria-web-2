<?php 
	
	require_once 'Models/Usuario.php';

	class usuariosController
	{
		
		public static function index()
		{
			require_once 'Views/usuarios/homePage.php';
			

		}

		public static function create()
		{
			require_once 'Views/usuarios/create.php';

		}

		public static function list()
		{
			$usuario= new Usuario();
			$result= $usuario->list();
			require_once 'Views/usuarios/list.php';
		}
	}

?>