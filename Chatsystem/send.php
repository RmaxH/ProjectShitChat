<?php

session_start();
include 'db.php';
$message=$_POST['message'];
$name = $_SESSION['name'];

$sql = "INSERT INTO posts(message,name) VALUES('$message','$name')";

$result = $db->query($sql);

header("Location:home.php");

?>




