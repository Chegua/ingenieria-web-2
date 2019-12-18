<?php

	$operacion= $_POST['operacion'];
	$num1= $_POST['num1'];
	$num2= $_POST['num2'];

	function suma($a,$b)
	{
		$resultado= $a+$b;

		return $resultado;
	}

	function resta($a,$b)
	{
		$resultado= $a-$b;

		return $resultado;
	}

	function multiplicacion($a,$b)
	{
		$resultado= $a*$b;

		return $resultado;
	}

	function division($a,$b)
	{
		if ($b!=0) {
			$resultado= $a/$b;

		} else {
			$resultado= null;
		}
		

		return $resultado;
	}


switch ($operacion) {
	case 'suma':
		$suma= suma($num1,$num2);

		echo 'El resultado de la suma es: '.$suma;
		break;

	case 'resta':
		$resta= resta($num1,$num2);

		echo 'El resultado de la resta es: '.$resta;

		break;

	case 'multiplicacion':
		$multiplicacion= multiplicacion($num1,$num2);

		echo 'El resultado de la multiplicacion es: '.$multiplicacion;

		break;

	case 'division':
		$division= division($num1,$num2);

		if (!$division) {
			echo "No puedes dividir entre cero";
		}else{
			echo 'El resultado de la division es: '.$division;

		}

		break;
	
	default:
		# code...
		break;
}