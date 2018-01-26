<?php
	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

	<div>
		<h1 style="background-color: #6495ED;color: white;"><?php echo $_SESSION['name']?>-online</h1>

		<div class="output">
			

		</div>

		<form method="post" action="send.php">
			<input type="text" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
			<br>
			<input type="submit" value="Senden">
		</form>
		<br>
		<form action="logout.php">
			<input style="width:100%; background-color: #6495ED; color: white; font-size:20px;" 
			type="submit" value="Ausloggen">
			

		</form>



	</div>

</body>
</html>