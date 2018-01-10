<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>ChitCat</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Anmelden</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="Benutzername">
  	</div>
  	<div class="input-group">
            <input type="password" name="password" placeholder="Passwort">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" id="login" name="login_user">Login</button>
		<button type="submit" class="btn" id="guest" name="guest_user">Gastzugang</button>
  	</div>
  	<p class="registerParagraph">
  		Noch kein Mitglied? <a href="register.php">Registrieren</a>
  	</p>
  </form>
</body>
</html>