<?php

	$valor = $_GET['valor'];
	$carro = $_GET['carro'];

	if($valor < 40000){
		$total = $valor	* 0.05 + $valor;
		echo "Valor total do $carro = R$ $total.";
	}else if($valor < 70000){
		$total = ($valor * 0.10) + ($valor * 0.15) + $valor; 
		echo "Valor total do $carro = R$ $total.";
	}else{
		$total = ($valor * 0.15) + ($valor * 0.20) + $valor;
		echo "Valor total do $carro = R$ $total.";

	}

?>