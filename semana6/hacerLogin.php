<?php
	$checkUsuario = $_GET['inputUsuario'];
	$checkPassword = $_GET['inputPassword'];	

	$archivo = fopen("usuarios.txt", "r") or die("Imposible arbrir el archivo");
	while(!feof($archivo)) 
	{
		$objeto = json_decode(fgets($archivo));
		if ($objeto->usuario == $checkUsuario && $objeto->password == $checkPassword) {
			
		}
	 	echo $objeto -> usuario;
	 	echo $checkUsuario;
	}
	fclose($archivo);
?>