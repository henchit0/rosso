<!DOCTYPE html>
<html>
<body>

<h2>Listado de usuarios</h2>

<ol>
	<?php
		$archivo = fopen("usuarios.txt", "r") or die("Imposible arbrir el archivo");
		while(!feof($archivo)) 
		{
		 	$objeto = json_decode(fgets($archivo));
			echo "<li>".$objeto->nombre." ".$objeto->apellido."</li>";

		}
		fclose($archivo);
	?>
</ol> 

</body>
</html>