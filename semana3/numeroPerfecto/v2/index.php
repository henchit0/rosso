<?php
	
	//var_dump($_GET);
	//echo $_GET["nombre"];

	$sumaMenor = 0;
	//$numero = 6;
	$numero = $_GET["numero"];

	for ($i=1; $i < $numero ; $i++) 
	{ 	
		
		if ($numero % $i == 0) 
		{
			$sumaMenor = $sumaMenor + $i;
			//echo $sumaMenor,'<br>';
		}
		
	}
	if ($numero == $sumaMenor) 
	{
		echo $numero,' es un un numero perfecto. <br><br>';	
	}

?>