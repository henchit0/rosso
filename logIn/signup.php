<?php
	require "header.php";

?>

	<main>
		<dir class="wrapper-main">
			<section class="section-default">
				<h1>Signup</h1>
				<?php
					if (isset($_GET['error'])) 
					{
						if ($_GET['error'] == "camposvacios") {
							echo '<p>Llena todos los campos!</p>';
						}
						else if ($_GET['error'] == "mailusuarioinvalido") 
						{
							echo '<p>El E-mail y el usuario ingresados son invalidos!</p>';
						}
						else if ($_GET['error'] == "mailinvalido") 
						{
							echo '<p>El E-mail ingresado es invalido!</p>';
						}
						else if ($_GET['error'] == "usuarioinvalido") 
						{
							echo '<p>El usuario ingresado es invalido!</p>';
						}
						else if ($_GET['error'] == "passworddistintos") 
						{
							echo '<p>Las contraseñas ingresadas son distintas!</p>';
						}
						else if ($_GET['error'] == "usuarioyaexiste") 
						{
							echo '<p>El usuario ya existe! Elije uno distinto.</p>';
						}
					}
					else if ($_GET['signup'])
					{
						echo '<p>Bienvenido!</p>';
					}
				?>
					<form action="includes/signup.inc.php" method="post">
						<input type="text" name="uid" placeholder="Username">
						<input type="text" name="mail" placeholder="E-Mail">
						<input type="password" name="pwd" placeholder="Password">
						<input type="password" name="pwd-repeat" placeholder="Repeat password">
						<button type="submit" name="signup-submit">Signup</button>
					</form>
			</section>
		</dir>
		
	</main>

<?php

	require "footer.php";

?>