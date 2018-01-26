<?php

$conn = mysqli_connect('localhost', 'root', '', 'chatsystem');
if(!$conn){
	die("Verbindung fehlgeschlagen".mysqli_connect_error());
}

?>