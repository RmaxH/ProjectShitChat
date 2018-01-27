<?php
session_start();
include 'db.php';

$username = $_POST['username']; 

$sql = "INSERT INTO gastzugang (name)";
$result = $db->query($sql);

if (!$row = $result->fetch_assoc()){
	header("Location:error.php");

}else{

	$_SESSION['name'] = $_POST['username'];

	header("Location:gastzugang.php");
}
?>