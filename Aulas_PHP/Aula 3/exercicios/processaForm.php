<?php

	$num = $_GET['numero'];

	if($num >= 0){
		echo "$num é positivo.";
	}else{
		echo "$num é negativo.";
	}


?>