<?php
	session_start();
	include 'db.php';

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Let's Chat!</title>
	<meta http-equiv="refresh" content="10">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div >
		<h1 style="background-color: #6495ED;color: white;">Willkommen <?php echo $_SESSION['name']?> - online</h1>


		<script type="text/javascript" id="chatr">
			


			setInterval(refreshMessages, 1000);
			function refreshMessages() {
			  $.ajax({
			    url: 'chat.php',
			    type: 'GET',
			    dataType: 'html',
			    success: function(data) {
			      $('#chat').html(data); // data came back ok, so display it
			    },
			    error: function() {
			      $('#chat').prepend('Error retrieving new messages..');
			    }
			  });
			}




		</script>



		<div class="output">
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
		<form action="ausloggen.php">
			<input style="width:100%; background-color: #6495ED; color: white; font-size:20px;" 
			type="submit" value="Ausloggen">
			

		</form>



	</div>

</body>
</html>