<?php 

$num1 = 10;
$num2 = 2;

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

$resultadosoma = soma($num1, $num2);
echo("O resultado da soma é $resultadosoma");	

$resultadosubtracao = subtracao($num1, $num2);
echo("O resultado da subtracao é $resultadosubtracao");	

$resultadomultiplicacao = multiplicacao($num1, $num2);
echo("O resultado da multiplicacao é $resultadomultiplicacao");	

$resultadodivisao = divisao($num1, $num2);
echo("O resultado da divisao é $resultadodivisao");	

 ?>