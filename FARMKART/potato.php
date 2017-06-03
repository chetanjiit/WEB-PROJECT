<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="paleturquoise">
<style>
div
{
	box-shadow: 2px 2px 8px 5px grey;
	margin-right:900px;
	padding-left:50px;
	font-family:comic sans ms;
	margin-left:100px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:forestgreen;
    position: fixed;
    top: 0;
    width: 100%;
	margin-left:-10px;
	margin-right:500px;
}


li {
    float: left;
}

li a {
    display: block;
    color:white;;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
a:hover
{
	background-color:black;
	color:white;
}
h2
{
	font-family:arial;
	background-color:midnightblue;
	color:white;
	margin-left:-2px;
	padding-top:5px;
	padding-bottom:5px;
	margin-left:-50px;
	margin-right:-30px;
}
table ,tr,td
{
	border:solid;
  color:black;
	border-collapse:collapse;
}
th
{

}
</style>
<ul>
  
  <li style="float:right; font-size:25px;">
  <a href="#news">News</a></li>
   <li style="float:right;font-size:25px;">
   <a href="#contact">Contact</a></li>
  <li style="float:right;font-size:25px;">
   <a href="#about">About</a></li>
  
   <li style="float:right; font-size:25px;">
   <a  href='#home'>Home</a></li>

</ul>
<br /><br />
  <center><h2>Farmers growing Potato</h2></center><br />
 
<?php

session_start();
$dbfile = mysqli_connect("localhost","root","");
mysqli_select_db($dbfile,"project");
$s="select * from fsignup where Crops like '%POTATO%'";
$result= mysqli_query($dbfile,$s);
$count= mysqli_num_rows($result);
echo"<center><table> <tr>
<th><h4>Name</th>
<th>Emailid</th>
<th>Contact</th>
<th>Address</th>
<th>Crops</th>
<th>Field Area</th></h4></tr>";
for($i=0;$i<$count;$i++)
{
$row= mysqli_fetch_row($result);
echo"<div><tr><td>
 <h4>".$row[0]."</td></h4>
<td><h4>".$row[1]."</td></h4>
<td><h4>".$row[3]."</h4>
<td><h4>".$row[4]."</h4>
<td><h4>".$row[8]."</h4>
<td><h4>".$row[9]."</h4></td></tr>

</div>";
}
?>
</body>
</html>