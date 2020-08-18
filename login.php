<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>AnonyTunisia</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="header">
		<h2>Connexion</h2>
	</div>

	<form method="post" action="login.php">
		<!--display errors-->
		<?php include('errors.php');?>
		<div class="input-group">
			<label>Nickname</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="Password" name="password1">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Connecter</button>
		</div>
		<p>
			Nouveau utilisateur?  <a href="register.php">Inscrivez-vous</a>
		</p>
	</form>
	<footer id="footer">
    &copy; Créé par  <b> Brahmi Khairi</b> - 2020
 </footer>
</body>
</html>