<?php
session_start();
include 'db.php';

$uname = $_POST['uname']; 
$pass = $_POST['pass']; 

$sql = "SELECT * FROM registriere WHERE username='$uname' AND passwort ='$pass'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()){
	header("Location:error.php");

}else{

	$_SESSION['name'] = $_POST['uname'];

	header("Location:home.php");
}


?>