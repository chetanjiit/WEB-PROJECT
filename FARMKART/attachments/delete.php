<?php
session_start();
$dbfile = mysql_connect("localhost","root","");
mysql_select_db("mydatabase",$dbfile);
$id = $_REQUEST['id'];
mysql_query("DELETE FROM mydata where sno='".$id."'");
$_SESSION['success']="Congratulations, Your Information has been successfully stored";
header('location:view_all_records.php')
?>