<?php
session_start();
$dbfile = mysql_connect("localhost","root","");
mysql_select_db("mydatabase",$dbfile);
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email=$_POST['email'];
	$qualification =$_POST['qualification'];
	$address = $_POST['address'];
	$sql = "INSERT INTO mydata (name, age, gender, email, quilification, address) VALUES ('$name', '$age', '$gender','$email','$qualification', '$address')";
	mysql_query($sql) or die(mysql_error());
	$_SESSION['success']="Congratulations, Your Information has been successfully stored";
	header('location:contact_us.php');
?>