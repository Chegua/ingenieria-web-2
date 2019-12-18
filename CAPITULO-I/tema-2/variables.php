<?php
	

	$persona = array(
		'nombre' => 'Jose',
		'apellido' => 'Lopez', 
		'edad' => 22,
		'direccion' => array(
			'calle' => '03',
			'N-casa' => '35'
		)
	);

	$persona['edad']++;

	echo $persona['edad'].'<br>';

	$persona['nombre_completo']= $persona['nombre'].' '.$persona['apellido'];

	var_dump($persona);

	