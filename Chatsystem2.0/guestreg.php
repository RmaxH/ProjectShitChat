<?php

include 'db.php';
$username = $_POST['username']; 

$sql = "INSERT INTO gastzugang(username,email,passwort) 
VALUES ('$username')";
$result = $db->query($sql);

header("Location:index.php");










?>