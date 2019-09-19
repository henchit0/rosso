<?php
	$checkUsuario = $_GET['inputUsuario'];
	$checkPassword = $_GET['inputPassword'];

	$archivo = fopen("usuarios.txt", "r") or die("Imposible arbrir el archivo");
	while(!feof($archivo)) 
	{
		$objeto = json_decode(fgets($archivo));
	 	if ($checkUsuario == $archivo->usuario) {
	 		echo 'hola';
	 	}
	}
	fclose($archivo);
?>