<?php

include 'db.php';
$uname = $_POST['uname']; 
$email = $_POST['Email']; 
$pass = $_POST['Password']; 

$sql = "INSERT INTO registriere(username,email,passwort) 
VALUES ('$uname','$email','$pass')";
$result = $conn->query($sql);

header("Location:index.php");










?>