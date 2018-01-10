<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Registrieren</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
          <input type="text" name="username" placeholder="Benutzername" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="email" name="email" placeholder="E-Mail" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_1" placeholder="Passwort">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_2" placeholder="Passwort bestätigen">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registrieren</button>
  	</div>
  	<p>
  		Schon Mitglied? <a href="login.php">Anmelden</a>
  	</p>
  </form>
</body>
</html>