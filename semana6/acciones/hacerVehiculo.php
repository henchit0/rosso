<?php
	$miSegundoObjeto = new stdClass();
	$miSegundoObjeto->marca = $_GET['inputMarca'];
	$miSegundoObjeto->patente = $_GET['inputPatente'];

	$archivo = fopen('estacionados.txt', 'a');
	fwrite($archivo, json_encode($miSegundoObjeto)."\n");
	fclose($archivo);
?>