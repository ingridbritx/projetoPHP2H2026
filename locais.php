<?php 
	$nome = "Ingrid"; //vatiável local no script 

	//implementação de uma função 

	function exibir(){
		$nome =  "Lara";  //variável local na função

		echo "Valor da variável dentro da função: " .$nome;
	}

	exibir(); //chamada da função 

	echo "<br/> Valor da variável fora da função: " .$nome;

 ?>