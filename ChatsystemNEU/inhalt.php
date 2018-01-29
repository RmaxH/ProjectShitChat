<?php
	include 'db.php';
						
		$sql = "SELECT  * FROM posts " ;
		$result = $db->query($sql);

		//Holt die Einträge aus der posts Tabelle und gibt sie formatiert aus
		if ($result->num_rows > 0){

			while($row = $result->fetch_assoc()){
				echo "<p class='separator'>" . "</p>" . "<br>";
				echo $row["name"]. "<span class='lightgrey'>" . " | " . $row["date"] .":   " . "" . "</span>" . "<br>";
				echo $row["message"] . "<br>" . "<br>";
				}
			}
			else{
				echo "Schreibe eine Nachricht";
			}
		
		$db->close();
		//Scrollt das Chatfenster nach unten
		echo "<script> scrollToBottom('chatr') </script>";		
?>