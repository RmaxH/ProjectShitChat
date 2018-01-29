<?php

include 'db.php';
$username = $_POST['username']; 
$email = $_POST['Email']; 
$pass = $_POST['Passwort1']; 
$pass = md5($passwort);
$sql = "INSERT INTO registriere(username,email,passwort) VALUES ('$username','$email','$pass')";
$result = $db->query($sql);
header("Location:index.php");

if (empty($username)) { 
	array_push($errors, "Benutzername wird benötigt"); 
	}
if (empty($email)) { 
	array_push($errors, "E-Mail wird benötigt"); 
	}
if (empty($Passwort1)) { 
	array_push($errors, "Passwort wird benötigt"); 
	}
if ($Passwort1 != $Passwort2) {
	array_push($errors, "Die Passwörter stimmen nicht überein");
	}

?>