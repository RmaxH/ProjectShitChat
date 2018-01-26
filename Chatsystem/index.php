<!DOCTYPE html>
<html>
<head>
	<title>Chatsystem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<div id="info">
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



		</div>
		

	</div>




</body>
</html>