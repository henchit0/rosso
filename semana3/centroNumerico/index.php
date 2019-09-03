<?php
	
	$sumaMenor = 0;
	$sumaMayor = 0;
	$bandera = 0;
	$contador = 0;

	for ($i=2; $i < 100000; $i++)//Iteramos de 1 a n, donde n es el maximo valor hasta el cual queremos averiguar si hay 
	{ 							 //centros numericos

		for ($j=0; $j < $i ; $j++) 
		{ 
			//echo $j,'jota<br>';
			$sumaMenor = $sumaMenor + $j;
		}

		//echo $sumaMenor,"suma menor<br>";
		$contador = $i + 1; //-----------------------Usamos un contador para tomar el primer valor mayor a i
		//echo $contador,"contador<br>";


		while ($bandera == 0) 
		{

			$sumaMayor = $sumaMayor + $contador;//
			//echo $sumaMayor	,"suma mayor <br>";

			if ($sumaMayor == $sumaMenor) //---------Si la suma de menores es igual a la de mayores, i es centro numerico
			{
			 	echo $i," es centro numerico.<br>";
			 	$bandera = 1;
			} 
				
			if ($sumaMayor > $sumaMenor) //----------Si la suma de los mayores es mayor a la de menores, i no es centro numerico
			{
				$bandera = 1;
			}
			
			$contador = $contador + 1;


		}
		
		//echo 'Suma de menores: ',$sumaMenor,'<br>';
		//echo 'Suma de mayores: ',$sumaMayores,'<br>';


		$sumaMenor = 0;
		$sumaMayor =  0;
		$bandera = 0;
		
	}
	


?>