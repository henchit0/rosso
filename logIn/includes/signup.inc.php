<?php
	if (isset($_POST['signup-submit']))
	{
		require 'dbh.inc.php';
	

	$usuarioNombre = $_POST['uid'];
	$usuarioEmail = $_POST['mail'];
	$usuarioPassword = $_POST['pwd'];
	$usuarioPasswordRepetir = $_POST['pwd-repeat'];

	if (empty($usuarioNombre)||empty($usuarioEmail)||empty($usuarioPassword)||empty($usuarioPasswordRepetir)) {
		header("Location: ../signup.php?error=camposvacios&uid=".$usuarioNombre."&mail=".$usuarioEmail);
		exit();
	}
	else if (!filter_var($usuarioEmail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$usuarioNombre)) {
		header("Location: ../signup.php?error=mailusuarioinvalido");
		exit();
	}
	else if (!filter_var($usuarioEmail,FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=mailinvalido&uid=".$usuarioNombre);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/",$usuarioNombre)) {
		header("Location: ../signup.php?error=usuarioinvalido&mail=".$usuarioEmail);
		exit();
	}
	else if ($usuarioPassword !== $usuarioPasswordRepetir) {
		header("Location: ../signup.php?error=passworddistintos&uid=".$usuarioNombre."&mail=".$usuarioEmail);
		exit();
	}
	else {
		$sql = "SELECT nombreUsuario FROM usuarios WHERE nombreUsuario =?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../signup.php?error=sqlerror2");
		exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $usuarioNombre);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usuarioyaexiste&mail=".$usuarioEmail);
				exit();
			}
			else {
				$sql = "INSERT INTO usuarios (nombreUsuario, emailUsuario, passwordUsuario) VALUES (?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../signup.php?error=sqlerror1");
					exit();
				}	
				else {

					$haspwd = password_hash($usuarioPassword, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $usuarioNombre,$usuarioEmail,$haspwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../signup.php?signup=exitoso");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	}
	else{
		header("Location: ../signup.php");

	}
?>