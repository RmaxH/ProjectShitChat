<?php
	session_start();
	include 'db.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

	<div >
		<h1 style="background-color: #6495ED;color: white;"><?php echo $_SESSION['name']?>-online</h1>

		<div class="output">
			<?php

				$sql = "SELECT  * FROM posts " ;
				$result = $conn->query($sql);

				if ($result->num_rows > 0){

					while($row = $result->fetch_assoc()){
						echo "" . $row["name"]. " " . $row["date"] .":   " . "" .$row["message"].  "<br>";
						echo "<br>";
					}
				}else{
					echo "0 results";
				}
				$conn->close();



			?>


			

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