<?php
	session_start();
	include 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Let's Chat!</title>
	<meta http-equiv="refresh" content="10">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
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
			<li><h1 class="welcomeUser" >Willkommen <?php echo "<br>" . $_SESSION['name']?></h1></li>
			<li>
				<form action="ausloggen.php">
					<input class="btn" type="submit" value="Ausloggen" id="logout" action="ausloggen.php">
				</form>
			</li>
			<li class="welcomeUser">
				Im Chat:
			</li>
			<li>
				<?php
					$sql2 = "SELECT username FROM registriere WHERE isOnline=1" ;
					$result2 = $db->query($sql2);

					if ($result2->num_rows > 0){

						while($row = $result2->fetch_assoc()){
							echo "<p class='separator'>" . "" . "</p>" . "<br>";
							echo "" . $row["username"]. "<br>";
							echo "<br>";
						}
					}
				?>
			</li>
		</ul>

	</div>

	<div >
		
		<div class="content">
			<div class="output"  id="chatr">
				<?php

					$sql = "SELECT  * FROM posts " ;
					$result = $db->query($sql);

					if ($result->num_rows > 0){

						while($row = $result->fetch_assoc()){
							echo "<p class='separator'>" . "" . "</p>" . "<br>";
							echo "" . $row["name"]. "<span class='lightgrey'>" . " | " . $row["date"] .":   " . "" . "</span>" . "<br>";
							echo $row["message"] . "<br>";
							echo "<br>";
						}
					}else{
						echo "Schreibe eine Nachricht";
					}
					$db->close();

				?>
				
			</div>
	
			<form class="messageArea" method="post" action="send.php">
				<input class="myMessage" type="text" rows="2" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
				<input class="btn send" type="submit" value="Senden">	
			</form>
			
		<button onClick="scrollToBottom('chatr')">To be or not to be</button>
		</div>
	</div>
</body>
</html>