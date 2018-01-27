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
		<h1 style="background-color: #6495ED;color: white;">Willkommen <?php echo $_SESSION['name']?> - online</h1>

		<div class="output" id="chatr">
			<?php

				$sql = "SELECT  * FROM posts " ;
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

		<form method="post" action="send.php">
			<input type="text" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
			<br>
			<input type="submit" value="Senden">
		</form>
		
		<br>
	</div>

</body>
</html>