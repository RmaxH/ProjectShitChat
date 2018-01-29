<?php
	session_start();
	include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gast</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="home.js"></script>
</head>
<body>

	<!-- sidebar, enthält keine Liste der angemeldeten Nutzer -->
	<div id="sidebar" onclick="toggleSidebar()">
		<div class="toggle-btn">
			<!-- Icon der Sidebar -->
			<span></span>
			<span></span>
			<span></span>
		</div>
		
		<ul>
			<li>
				<h1 class="welcomeUser" >Willkommen <?php echo "<br>" . $_SESSION['username']?></h1>
			</li>
			<li>
				<form action="ausloggen.php">
					<input class="btn" type="submit" value="Ausloggen" id="logout" action="ausloggen.php">
				</form>
			</li>
		</ul>

	</div>

		<div class="content">
			<!-- Beinhaltet den Chatverlauf -->
			<div class="output"  id="chatg">
			</div>
	
			<form class="messageArea" method="post" action="guestsend.php">
				<input class="myMessage" type="text" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
				<input class="btn send" type="submit" value="Senden">	
			</form>
		
		</div>
</body>
</html>