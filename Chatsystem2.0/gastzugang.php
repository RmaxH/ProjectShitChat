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

	<div >
		<h1 style="background-color: #6495ED;color: white;"><!--<?php echo $_SESSION['name']?>-->online</h1>

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


			<input type="text" id="uname" value=""/>
			<input type="text" name="message" placeholder="Schreib eine Nachricht" class="form-ctrl">
			<br>
			<input type="submit" value="Senden">
		</form>
		
		<br>
		<form action="ausloggen.php">
			<input style="width:100%; background-color: #6495ED; color: white; font-size:20px;" 
			type="submit" value="Ausloggen">
			

		</form>



	</div>

</body>
</html>