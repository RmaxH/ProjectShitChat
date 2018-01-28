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
<body onload="scrollToBottom('chatr')">

	<script type="text/javascript">
		function toggleSidebar(){
			document.getElementById("sidebar").classList.toggle('active');

		}
	</script>

	<div id="sidebar" onclick="toggleSidebar()">
		<div class="toggle-btn">
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
			<div class="output"  id="chatr">
				<?php

					$sql = "SELECT  * FROM guestposts " ;
					$result = $db->query($sql);

					if ($result->num_rows > 0){

						while($row = $result->fetch_assoc()){
							echo "<p class='separator'>" . "" . "</p>" . "<br>";
							echo "" . $row["username"]. "<span class='lightgrey'>" . " | " . $row["time"] .":   " . "" . "</span>" . "<br>";
							echo $row["message"] . "<br>";
							echo "<br>";
						}
					}else{
						echo "Schreibe eine Nachricht";
					}
					$db->close();

				?>
				
			</div>
	
			<form class="messageArea" method="post" action="guestsend.php">
				<input class="myMessage" type="text" rows="2" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
				<input class="btn send" type="submit" value="Senden">	
			</form>
			
		<button onClick="scrollToBottom('chatr')">To be or not to be</button>
		</div>

</body>
</html>