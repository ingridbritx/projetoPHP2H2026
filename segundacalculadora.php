<?php 	

$num1=10;
$num2=20;
$op=3;

switch ($op) {
	case 1: $resp = $num1 + $num2;
			$nomeOp = "Soma";
		break;

	case 2: $resp = $num1 - $num2;
			$nomeOp = "Subtração";
		break;
	
	case 3: $resp = $num1 * $num2;
			$nomeOp = "Multiplicação";
		break;
	
	case 4: 
		if ($num2 ==0){
			$nomeOp ="Invalido";
			$resp = 0


		}else{
			$resp = $num1 / $num2;
			$nomeOp = "Divisão";

		}


	
		break;



	default: echo "Sair";
		break;
}

	echo "A $nomeOp de $num1 e $num2 = $resp";



 ?>