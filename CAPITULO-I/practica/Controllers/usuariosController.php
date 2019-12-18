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
			if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])) {
				$nombre= $_POST['nombre'];
				$apellido= $_POST['apellido'];
				$edad= $_POST['edad'];

				$usuario= new Usuario($nombre,$apellido,$edad);
				$respuesta= $usuario->comprobarEdad();
			}
			require_once 'Views/usuarios/create.php';

		}

		public static function list()
		{
			$usuario= new Usuario();
			$result= $usuario->list();
			require_once 'Views/usuarios/list.php';
		}

		public static function ver()
		{
			$n=$_REQUEST['nombre'];
			$usuario= new Usuario();
			$usuario->setAtribute('nombre',$n);
			$encontrado= $usuario->ver();
			require_once 'Views/usuarios/ver.php';
		}
	}

?>