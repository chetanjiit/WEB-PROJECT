<?php
session_start();
$dbfile = mysqli_connect("localhost","root","");
mysqli_select_db($dbfile,"mydatabase");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pswrd = $_POST['pwd'];
	
	
	
		
	$sql = "INSERT INTO mydata (name,emailid,password) VALUES ('$name','$email','$pswrd')";
	mysqli_query($dbfile,$sql) or die(mysqli_error($dbfile));
	

	?>
	