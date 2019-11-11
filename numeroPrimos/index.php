<?php
/*Numero primos:
	mostrar todos los numeros primos de 1 al 1000  */

	$numero;
	$cantDivisores;
	$numero = 1;
	$cantDivisores = 0;
	for ($i=0; $i<1000 ; $i++) { 
	
		for ($j=2; $j<$numero ; $j++) {
			if ($numero%$j==0) {
				$cantDivisores++;
			}
		}
	
		if ($cantDivisores<1) {
			echo $numero,' es un numero primo. <br>';
		}
		$numero++;
		$cantDivisores = 0;

	}

?>