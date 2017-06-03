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
	$hid_sno_no = $_POST['hid_sno_no'];
	$sql = "update mydata set name='$name', age='$age', gender='$gender', email='$email', quilification='$qualification', address='$address' where sno='".$hid_sno_no."'";
	mysql_query($sql) or die(mysql_error());
	$_SESSION['success']="Congratulations, Your Information has been successfully updated";
	header('location:view_all_records.php');
?>