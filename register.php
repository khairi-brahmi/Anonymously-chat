

<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tunisian Chat</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="header">
		<h2>Inscription</h2>
	</div>

	<form method="post" action="register.php">
		<!--errors display-->
		<?php include('errors.php');?>

		<div class="input-group">
			<label>Nickname</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div>
		
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="Password" name="password1">
		</div>
		<p style="color:red;font-size:9px;"> <b>NB:</b>Le mot de passe doit être de 6 caractères minimum.</p>
		<div class="input-group">
			<label>Confirmer mot de passe</label>
			<input type="Password" name="password2">
		</div>

		<div class="input-group">
			<label>Votre age</label>
			<input type="number" name="age" min="12" max="75">
		</div>
		<div align=center>
			<h3>Votre sexe :</h3>
			 <input type="radio" id="male" name="gender" value="Homme" checked>
<label for="male">Homme</label>
<input type="radio" id="female" name="gender" value="Femme">
<label for="female">Femme</label>
<input type="radio" id="other" name="gender" value="Autre">
<label for="other">Autre</label> 
		</div>
		 <label for="cars"> <b>Votre situation : </b></label>

<select id="situation" name="situation">
<option value="En couple ">En couple</option>
  <option value="Marié(e)">Marié(e)</option>
  <option value="Célibataire">Célibataire</option>
  <option value="Divorcé(e)">Divorcé(e)</option>
  <option value="Veuf(ve)">Veuf(ve)</option>
</select> 
		<div class="input-group">
			<button type="submit" name="register" class="btn">Enregistrer</button>
		</div>
		<p>
			Vous avez déja un compte?<a href="login.php">Connecter</a>
		</p>
	</form>
	<footer id="footer">
    &copy; Créé par  <b> Brahmi Khairi</b> - 2020
 </footer>
</body>
</html>