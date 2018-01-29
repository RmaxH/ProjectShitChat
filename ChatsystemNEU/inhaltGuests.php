<?php
	include 'db.php';
				
		$sql = "SELECT  * FROM guestposts " ;
		$result = $db->query($sql);

		//Holt die Einträge aus der guestposts Tabelle und gibt sie formatiert aus
		if ($result->num_rows > 0){

			while($row = $result->fetch_assoc()){
				echo "<p class='separator'>" . "" . "</p>" . "<br>";
				echo "" . $row["username"]. "<span class='lightgrey'>" . " | " . $row["time"] .":   " . "" . "</span>" . "<br>";
				echo $row["message"] . "<br>" . "<br>";
				}
			}
			else{
				echo "Schreibe eine Nachricht";
			}
		$db->close();
		
		//Scrollt das Chatfenster nach unten
		echo "<script> scrollToBottom('chatg') </script>";
?>