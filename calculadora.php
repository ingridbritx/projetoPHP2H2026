<?php 	

$num1=10;
$num2=20;
$op=1;

switch ($op) {
	case 1: $resp = $num1 + $num2;
		echo "A soma do $num1 e $num2 = $resp";
		break;

	case 2: $resp = $num1 - $num2;
		echo "A subtração do $num1 e $num2 = $resp";
		break;
	
	case 3: $resp = $num1 * $num2;
		echo "A multiplicação do $num1 e $num2 = resp";
		break;
	
	case 4: $resp = $num1 / $num2;
		echo "A divisão do $num1 e $num2 = $resp";
		break;
	
	
	default: echo "Sair";
		break;
}





 ?>