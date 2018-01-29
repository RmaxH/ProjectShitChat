<?php
session_start();
include 'db.php';
$username = $_POST['username']; 
$sql = "INSERT INTO gastzugang (username) VALUES ('$username')";
$result = $db->query($sql);

$_SESSION['username'] = $_POST['username'];

header("Location:gastzugang.php");

?>