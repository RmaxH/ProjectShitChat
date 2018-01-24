<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<script src="tabControl.js"></script>
	<div class="welcome">
		Willkommen bei
		<img src="logo.png" alt="Logo" class="logo" height="148" width="200">
	</div>

	  <div class="tab">
		<button class="tablinks" onclick="openForm(event, 'Register')" id="defaultOpen">Register</button>
		<button class="tablinks" onclick="openForm(event, 'Login')" >Login</button>
		<button class="tablinks" onclick="openForm(event, 'Gastzugang')">Gastzugang</button>
	  </div>
	  
	  	<div id="Register" class="tabcontent">
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
			</form>
		</div>
	  
		<div id="Login" class="tabcontent">
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
				</div>	
			</form>
		</div>
		
		<div id="Gastzugang" class="tabcontent">
		<form method="post" action="ChatWindow.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<input type="text" name="username" placeholder="Benutzername">
			</div>
			<p class="registerParagraph">
				Achtung: Für Gäste werden keine Daten gespeichert.
			</p>
			<div class="input-group">
				<button type="submit" class="btn" id="guest" name="login_guest">Zum Chat</button>
			</div>
			</form>
		</div>
		
		<script>
			document.getElementById("defaultOpen").click();
		</script>
		
	</body>
</html>