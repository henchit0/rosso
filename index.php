<?php

	$numero;
	$contPrimos;
	$numero = 4000;
	$contPrimos = 0;

	for ($i=2; $i<$numero ; $i++) {
		if ($numero%$i==0) {
			$contPrimos++;
		}
	}
	
	if ($contPrimos==0) {
		echo $numero,' es un numero primo.';
	} else {echo $numero,' no es primo y tiene ', $contPrimos,' divisores.';}

?>