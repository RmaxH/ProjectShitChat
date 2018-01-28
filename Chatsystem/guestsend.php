<?php

session_start();
include 'db.php';
$message=$_POST['message'];
$name = $_SESSION['username'];

$sql = "INSERT INTO gastzugang(message,username) VALUES('$message','$name')";

$result = $db->query($sql);

header("Location:gastzugang.php");

?>