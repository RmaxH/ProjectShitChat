<?php
	session_start();
	include 'db.php';

	$name = $_SESSION['name'];
	$onlineState = mysqli_query($db, "UPDATE registriere SET isOnline=0 WHERE username='$name'");

	session_destroy();
	
	header("Location:index.php");
?>