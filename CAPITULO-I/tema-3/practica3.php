<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$edad= 25;

		$nombre= "Pedro";

		$opcion= 0;

		$persona = array(
			'nombre' => 'Jose',
			'apellido' => 'Lopez', 
			'edad' => 22
		);

		// PRACTICA CON IF ELSE

		if ($edad>=18 && $nombre== "Luis") {
		 	echo "Es mayor de edad y se llama: ".$nombre;
		}elseif ($edad>=18) {
			echo "Es mayor de edad";
		}else {
		 	echo "Es menor de edad";
		}

		// PRACTICA CON SWITCH
		switch ($opcion) {
			case 1:
				 echo "<br>Estoy en el case 1";
				break;

			case 2:
				 echo "<br>Estoy en el case 2";
				break;

			case 3:
				 echo "<br>Estoy en el case 3";
				break;
			
			default:
				echo "<br>Estoy en el default";
				break;
		}

		// PRACTICA CON WHILE Y DO WHILE
		while ($opcion<= 4) {
			echo '<br>'.$opcion;

			$opcion+=2;
		}

		do{
			echo '<br>'.$opcion;

			$opcion+=2;
		}while ($opcion<= 4);


		// PRACTICA CON FOR

		for ($i=0; $i < 3; $i++) { 
			echo '<br>'.$i;
		}

		// PRACTICA CON FOREACH
		foreach ($persona as $key => $value) {
			echo("<br> {$key}=> {$value}") ;
		}
		  
	?>


		
</body>
</html>