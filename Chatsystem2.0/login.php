<?php
session_start();
include 'db.php';

$username = $_POST['username']; 
$pass = $_POST['passwort']; 
$pass = md5($passwort);
$sql = "SELECT * FROM registriere WHERE username='$username' AND passwort ='$pass'";

$result = $db->query($sql);

if (!$row = $result->fetch_assoc()){
	header("Location:error.php");

}else{

	$_SESSION['name'] = $_POST['username'];

	header("Location:home.php");
}


?>