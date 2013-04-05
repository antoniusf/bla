<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<?php
		if (isset($_GET['msg'])) {
			echo "<div class=\"messagebox\"><p>".$_GET['msg']."</p></div>";
		}
		?>
		<div style="height:100%; position:absolute; width:100%">
			<div class="registerlink"><a href="register.html">Registrieren</a></div>
			<div id="login">
				<div id="loginform">
				<form method="POST" action="login.php">
					<p class="name">Name<input type="text" name="user"></p>
					<p class="passwd">Passwort<input type="password" name="passwd"></p>
					<p class="subm"><input type="submit" value="Anmelden"></p>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>
