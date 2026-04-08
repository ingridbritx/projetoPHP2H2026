<?php 

$num1 = 10;
$num2 = 2;
$op =1;


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
	case 1: $resultado = soma($num1, $num2);
		break;

	case 2: $resultado = subtracao($num1, $num2);
		break;
	
	case 3: $resultado = multiplicacao($num1, $num2);
		break;
	
	case 4: $resultado = divisao($num1, $num2);
		break;
	
	
}

echo "O resultado da $op de $num1 e $num2 é $resultado."


 ?>