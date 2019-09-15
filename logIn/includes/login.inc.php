<?php

if (isset($_POST['login-submit']))
{
	require 'dbh.inc.php';

	$mailUsuario = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailUsuario) || empty($password)) 
	{
		header("Location: ../index.php?error=camposvacios");
		exit();
	}
	else 
	{
		$sql = "SELECT * FROM usuarios WHERE nombreUsuario=? OR emailUsuario=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) 
		{
			header("Location: ../index.php?error=sqlerror");
			exit();
		}	
		else 
		{
			mysqli_stmt_bind_param($stmt, "ss", $mailUsuario,$mailUsuario);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) 
			{
				$pwdCheck = password_verify($password, $row['passwordUsuario']);
				if ($pwdCheck == false) 
				{
					header("Location: ../index.php?error=passwordincorrecta");
					exit();
				}
				else if ($pwdCheck == true)
				{
					session_start();
					$_SESSION['idDeUsuario'] = $row['idUsuario'];
					$_SESSION['nombreUsuario'] = $row['nombreUsuario'];
					header("Location: ../index.php?login=exitoso");
					exit();
				}
				else
				{
					header("Location: ../index.php?error=passwordincorrecta");
					exit();
				}	
			}
			else
			{
				header("Location: ../index.php?error=nohayusuario");
			exit();
			}
		}
	}
}
else
{
	header("Location: ../index.php");
	exit();
}