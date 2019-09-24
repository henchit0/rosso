<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<meta name="description" content="This is an example meta description. This will often show up in search results.">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<div class="topnav">
			<a href="#">
				<img class="logo" src="img/logo.png" alt="logo" > 
			</a>
				<a class="active" href="index.php">Home</a>
				<a href="index.php">Porfolio</a>
				<a href="index.php">About Me</a>
				<a href="index.php">Contact</a>
			<div class="login-container">
				<?php
					if (isset($_SESSION['idDeUsuario'])) {
						echo '<form action="includes/logout.inc.php" method="post">
								<button type="submit" name="logout-submit">Logout</button>
							  </form>';
					}
					else
					{
						echo '<form action="includes/login.inc.php" method="post">
							  	<input type="text" name="mailuid" placeholder="Username/E-mail...">
					          	<input type="password" name="pwd" placeholder="Password...">
					          	<button type="submit" name="login-submit">Login</button>
					          	<b class="prueba" href="signup.php">Signup</b>
				              </form>';
					}
				?>
			</div>
		</div>		 	
</body>
</html>