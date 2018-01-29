<?php
$db = mysqli_connect('localhost', 'root', '', 'chatsystem');
if(!$db){
	die("Verbindung fehlgeschlagen".mysqli_connect_error());
}
?>