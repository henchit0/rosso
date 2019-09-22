<?php
	
	$checkUsuario = $_GET['inputUsuario'];
	$checkPassword = $_GET['inputPassword'];

	if (empty($checkUsuario) || empty($checkPassword)) 
	{
		header("Location: ../login.php?error=camposvacios");
		exit();
	}
	else
	{
		$archivo = fopen("usuarios.txt", "r") or die("Imposible arbrir el archivo");
	
		while(!feof($archivo)) 
		{
			$objeto = json_decode(fgets($archivo));
			if ($objeto->usuario == $checkUsuario) 
			{				 
				if ($objeto->password == $checkPassword)
				{
					header("Location: ../login.php?exito=signup");
					fclose($archivo);
					exit();
				}
				else
				{
					header("Location: ../login.php?error=passwordincorrecto");
					fclose($archivo);
					exit();
				}
			}
			else
			{
				header("Location: ../login.php?error=usuarionoexiste");
				fclose($archivo);
				exit();
			}
		 	
		}
		fclose($archivo);
	}	

		

	
	
	header("Location: ../login.php");
	exit();

?>