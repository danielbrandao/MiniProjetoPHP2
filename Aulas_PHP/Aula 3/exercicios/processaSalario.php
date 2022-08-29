<?php

	$sal_liquido = $_GET['salario'];
	$total_vendas = $_GET['vendas'];
	$funcionario = $_GET['funcionario'];

	//$sal_bruto = $sal_liquido + ($total_vendas * 0.04);

	$total = ((4 * $total_vendas) / 100) + $sal_liquido;

	echo "Ola vendedor. Seu salario esse mes eh de R$ $total";

	//echo "Salário de $funcionario esse mês = R$ $sal_bruto";

?>