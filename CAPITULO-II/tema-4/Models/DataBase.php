<?php 

	require_once('configurarBD.php');
	class DataBase
	{

		protected static $instance;


	    private function __construct() { }

	    public static function getInstance()
	    {
	      if(!isset(self::$instance))
			{
				try
				{					
					$datos_servidor=MANEJADOR.':host='.SERVIDOR.';dbname='.BD;
					self::$instance = new PDO($datos_servidor, USUARIO, CLAVE);
					self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					self::$instance->exec("SET CHARACTER SET utf8");
				}
				catch(PDOException $e)
				{
					self::$instance=null;
					throw new \Exception('Error al conectarse al servidor de BD',0);
				}
			}
			return self::$instance;
	    }

	    private function __clone() {}
	}


	
?>