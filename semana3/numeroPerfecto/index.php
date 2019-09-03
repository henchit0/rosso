<?php
	
	$sumaMenor = 0;

	for ($i=2; $i < 10000 ; $i++) //------------------Iteramos de 1 a n, donde n es el maximo valor hasta el cual queremos averiguar si hay 
	{ 					    	//------------------centro numericos  

		for ($j=1; $j <= $i - 1 ; $j++) 
		{ 
			//echo $i,' numero a buscar divisores. <br>';
			//echo $j,' numero a comprabar. <br>';

			if ($i % $j == 0) 
			{
				//echo $j,' es dividor de ',$i,'<br>';			
				$sumaMenor = $sumaMenor + $j;
				//echo $sumaMenor,' suma de divisores <br>';
			}
		}

		if ($sumaMenor == $i) 
		{
			echo $i,' es un un numero perfecto. <br><br>';	
		}
		$sumaMenor = 0;
			
	}

?>