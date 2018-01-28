<?php

include 'db.php';
$username = $_POST['username']; 
$sql = "INSERT INTO gastzugang (username) VALUES ('$username')";
$result = $db->query($sql);
header("Location:gastzugang.php");



?>