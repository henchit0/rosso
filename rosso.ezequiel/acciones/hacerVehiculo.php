<?php
	$miSegundoObjeto = new stdClass();

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$horaIngreso = mktime(); 	

	$miSegundoObjeto->patente = $_GET['inputPatente'];
	$miSegundoObjeto->horaIngreso = $horaIngreso;

	
	$archivo = fopen('../archivos/estacionados.txt', 'a');
	fwrite($archivo, json_encode($miSegundoObjeto)."\n");
	fclose($archivo);
	header("Location: ../paginas/ingresoVehiculo.php?exito=exito");
?>