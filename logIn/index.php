<?php
	require "header.php";
?>

	<main>
		<dir class="wrapper-main">
			<section class="section-default">
				<?php
					if (isset($_SESSION['idDeUsuario'])) {
						echo '<p class="login-status">You are logged in!</p>';
					}
					else
					{
						echo '<p class="login-status">You are logged out!</p>';
					}
				?>
				
			</section>
		</dir>
		
	</main>

<?php

	require "footer.php";

?>