
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
		<button class="tablinks" onclick="openForm(event, 'Register')">Registrieren</button>
		<button class="tablinks" onclick="openForm(event, 'Login')" id="defaultOpen">Login</button>
		<button class="tablinks" onclick="openForm(event, 'Gastzugang')">Gastzugang</button>
	</div>

	<div id="Register" class="tabcontent">
		<form action="registrieren.php" method="post">
		<div class="input-group">
			<input type="text" name="username" placeholder="Benutzername">
		</div>
		<div class="input-group">
			<input type="text" name="Email" placeholder="E-Mail">
		</div>
		<div class="input-group">
			<input type="password" name="Passwort1" placeholder="Passwort">
		</div>
		<div class="input-group">
			<input type="password" name="Passwort2" placeholder="Passwort bestätigen"><br><br>
		</div>
			<button class="btn" type="submit" name="reg_user">Registrieren</button>

		</form>
	</div>
		
	<div id="Login" class="tabcontent">
		<form action="login.php" method="post">
		<div class="input-group">
			<input type="text" name="username" placeholder="Benutzername">
		</div>
		<div class="input-group">			
			<input type="password" name="passwort" placeholder="Passwort">
		</div>	
			<button class="btn" type="submit" name="login_user">Einloggen</button>	
		</form>
	</div>
	
	<div id="Gastzugang" class="tabcontent">
		<form method="post" action="gastzugang.php">
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