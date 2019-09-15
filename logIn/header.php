<?php
	session_start();
?>

<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		li {
			color: green;
		}
		a {
			color: orange;
			font-family: "Verdana",verdana;
		}
	</style>
	<meta name="description" content="This is an example meta description. This will often show up in search results.">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title></title>
	
</head>
<body>	
	<header id="header" class="">		
		<nav>
			<a href="#">
				<img src="img/logo.png" alt="logo" > 
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">Porfolio</a></li>
				<li><a href="index.php">About Me</a></li>
				<li><a href="index.php">Contact</a></li>
			</ul>
		</nav>
			<div>
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
				              </form>
				              <a href="signup.php">Signup</a>';
					}
				?>
			</div>		 	
	</header>
</body>
</html>