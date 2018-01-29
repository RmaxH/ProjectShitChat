<?php
	session_start();
	include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Let's Chat!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="home.js"></script>
</head>
<body>
	
	<!-- sidebar -->
	<div id="sidebar" onclick="toggleSidebar()">
		<div class="toggle-btn">
			<!-- Icon der Sidebar -->
			<span></span>
			<span></span>
			<span></span>
		</div>
		
		<ul>
			<li>
				<h1 class="welcomeUser" >Willkommen <?php echo "<br>" . $_SESSION['name']?></h1></li>
			<li>
				<form action="ausloggen.php">
					<input class="btn" type="submit" value="Ausloggen" id="logout" action="ausloggen.php">
				</form>
			</li>
			<li class="welcomeUser">
				Im Chat:
			</li>
			<li>
				<!-- Gibt die eingeloggten User aus -->
				<?php
					$sql2 = "SELECT username FROM registriere WHERE isOnline=1" ;
					$result2 = $db->query($sql2);

					if ($result2->num_rows > 0){

						while($row = $result2->fetch_assoc()){;
							echo "<br>" . $row["username"]. "<br>";
						}
					}
				?>
			</li>
		</ul>

	</div>
	<div >	
	
		<div class="content">
			<!-- Beinhaltet den Chatverlauf -->
			<div class="output"  id="chatr">
			</div>
	
			<form class="messageArea" method="post" action="send.php">
				<input class="myMessage" type="text" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
				<input class="btn send" type="submit" value="Senden">	
			</form>

		</div>
	</div>
</body>
</html>