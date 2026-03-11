<?php 

	 	$ano = 1997;

	//implementação de uma função

	function exibir(){
		GLOBAL $ano; //definição da variavél global 
		$ano++;
		return $ano;
	}


	echo "<br/> Ano: " .$ano;
	echo "<br/> Ano: " .exibir();
	echo "<br/> Ano: " .exibir();
	echo "<br/> Ano: " .$ano;

 ?>