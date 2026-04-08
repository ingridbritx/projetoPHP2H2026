<?php 

$num1 = 10;
$num2 = 2;
$op =2;

function soma($num1, $num2){
	return ($num1+$num2);
}

function subtracao($num1, $num2){
	return ($num1-$num2);
}

function multiplicacao($num1, $num2){
	return ($num1*$num2);
}

function divisao($num1, $num2){
	return ($num1/$num2);
}

switch ($op) {
	case 1: $resultado= soma($num1, $num2);
	$valor = "soma";
		break;

	case 2: $resultado= subtracao($num1, $num2);
	$valor = "subtração";
		break;
	
	case 3: $resultado= multiplicacao($num1, $num2);
	$valor = "multiplicação";
		break;
	
	case 4: $resultado = divisao($num1, $num2);
	$valor = "divisão";
		break;
	
	
	default: echo "Sair";
		break;
}

echo "A $valor do $num1 e $num2 = $resultado";

 ?>