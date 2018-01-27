<?php
	session_start();
	include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gast</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

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
			<li>hallo</li>
			<li>
				<form action="ausloggen.php">
					<input type="submit" value="Ausloggen" id="logout" action="ausloggen.php">
				</form>
			</li>
		</ul>

	</div>

	<div >
		
		<div class="output">
			<?php

				$sql = "SELECT  * FROM gastzugang " ;
				$result = $db->query($sql);

				if ($result->num_rows > 0){

					while($row = $result->fetch_assoc()){
						echo "" . $row["name"]. " " . $row["date"] .":   " . "" .$row["message"].  "<br>";
						echo "<br>";
					}
				}else{
					echo "Schreibe eine Nachricht";
				}
				$db->close();

			?>

		</div>

		<form method="post" action="guestsend.php">	
			<input type="text" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
			<br>
			<input type="submit" value="Senden">
		</form>
		
		<br>

	</div>

</body>
</html>