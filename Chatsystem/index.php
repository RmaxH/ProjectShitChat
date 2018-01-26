<!DOCTYPE html>
<html>
<head>
	<title>Chatsystem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script src="tabControl.js"></script>
	<div class="welcome">
		Willkommen bei
		<img src="logo.png" alt="Logo" class="logo" height="148" width="200">
	</div>
	
	<div class="tab">
		<button class="tablinks" onclick="openForm(event, 'Register')">Register</button>
		<button class="tablinks" onclick="openForm(event, 'Login')" id="defaultOpen">Login</button>
		<button class="tablinks" onclick="openForm(event, 'Gastzugang')">Gastzugang</button>
	</div>

	<div id="Register" class="tabcontent">
		<form action="registrieren.php" method="post">
		<div class="input-group">
			<input type="text" name="uname" placeholder="Benutzername">
		</div>
		<div class="input-group">
			<input type="text" name="Email" placeholder="E-Mail">
		</div>
		<div class="input-group">
			<input type="password" name="Password" placeholder="Passwort"><br><br>	
		</div>
			<button class="btn" type="submit">Registrieren</button>	

		</form>
	</div>
		
	<div id="Login" class="tabcontent">
		<form action="login.php" method="post">
		<div class="input-group">
			<input type="text" name="uname" placeholder="Benutzername">
		</div>
		<div class="input-group">			
			<input type="password" name="pass" placeholder="Passwort">
		</div>	
			<button class="btn" type="submit">Einloggen</button>	
		</form>
	</div>
	
	<div id="Gastzugang" class="tabcontent">
		<form method="post" action="home.php">
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
	
<!--	<div id="info">
			<h2>Login here</h2>

			<form action="login.php" method="post">
			<label><b>Benutzername</b></label>
			<input type="text" name="uname" placeholder="Benutzername"><br><br>	
			<label><b>Passwort</b></label>
			<input type="password" name="pass" placeholder="Passwort"><br><br>	
			<button type="submit">Einloggen</button>	

			</form>
			

		<form action="registrieren.php" method="post">
				<h2>Noch kein Mitglied?</h2>
			<label><b>Benutzername</b></label>
				<input type="text" name="uname" placeholder="Benutzername"><br><br>	
			<label><b>E-Mail</b></label>
				<input type="text" name="Email" placeholder="E-Mail"><br><br>	
			<label><b>Passwort</b></label>
				<input type="password" name="Password" placeholder="Passwort"><br><br>	

			<button type="submit">Registrieren</button>	

			</form> 
	</div>			-->

	<script>
		document.getElementById("defaultOpen").click();
	</script>
</body>
</html>