<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:forestgreen;
    position: fixed;
    top: 0;
    width: 100%;
}
h2
{
	background-color:lightsteelblue;
	color:black;
	font-family:Copperplate Gothic;
	margin-left:400px;
	margin-right:400px;
	padding-top:5px;
	padding-bottom:5px;
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

#name
{
	height:25px; width:400px; border-radius:8px;
	
	color:navy;
}
table,tr,td
{
	font-size:20px;
	
}
#ab
{
	color:blue;
}
#dtb
{
	box-shadow: 2px 2px 8px 5px grey;
	margin-left:400px;
	margin-right:400px;
}
#sub
{
	border-radius:4px;
	color:white;
	 background-color:black;
	  border:solid; 
	  padding-left:10px;
	   padding-right:10px;
	    cursor:pointer;
		height:40px;
		 width:100px;
}
</style>
</head>

<body background="bgk.jpg">
<?php
session_start();
$dbfile = mysqli_connect("localhost","root","");
mysqli_select_db($dbfile,"project");
 $email=$_POST["email"];
	 $pswrd=$_POST["pswd"];
$k=1;
$s="select * from fsignup";
$result= mysqli_query($dbfile,$s);
$count= mysqli_num_rows($result);
for($i=0;$i<$count;$i++)
{
	$row= mysqli_fetch_row($result);
 if ($email==$row[1] and $pswrd==$row[2])
  { 
  if($row[4]==NULL)
	{  
echo "<ul>";
  
  echo "<li style='float:right; font-size:25px;'>";
  echo "<a href='#news'>News</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#contact'>Contact</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#about'>About</a></li>";
  
  echo "<li style='float:right; font-size:25px;'>";
  echo "<a  href='#home'>Home</a></li>";
  
echo "</ul>";


  echo "<br><br><br>";
    echo "<center><h3> Welcome <font color='BLUE'>" .$row[0];
	echo"<hr>";
	echo"</center>";
	echo"</font>";
	echo"<center><h2>PROFILE";
	echo"</h2>";
	echo"</center>";
	
	
	echo"<div id='dtb'>";
	echo"<center><table cellpadding='10' cellspacing='5'>";
echo"<tr>";

echo"<td>Name</td>";
echo"<td 
id='ab'>".$row[0]."</td>";
echo"</tr>";
echo"<td>Email</td>";
echo"<td 
id='ab'>".$row[1]."</td>";
echo"</tr>";
echo"<td>Contact</td>";
echo"<td 
id='ab'>".$row[3]."</td>";
echo"</tr>";
echo"</table>";
echo"</div>";
echo"<br><br>";
echo"<hr>";
echo"<center>";



echo"<h2>Complete Your Profile";
echo"</h2>";
echo"<form method='post' action='profsubmit.php' >";
	echo"<center><table cellpadding='10' cellspacing='5'>";
echo"<tr>";

echo"<td>Address:</td>";
echo"<td id='ab'>";
echo"<br><br>"; 
echo"<textarea rows='10' cols='30' name='address'>";
echo"</textarea>";
echo"</td>"; 
echo"</tr>";
echo"<td>State:</td>";
echo"<td id='ab'>";
echo"<input type='text' name='state' id='name' placeholder='   Enter State' required>";
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>City:</td>";
echo"<td id='ab'>";
echo"<input type='text' name='city' id='name' placeholder='   Enter City' required>";
echo"</td>"; 
echo"</tr>"; 
 echo"<tr>";
echo"<td>Pincode:</td>";
echo"<td id='ab'>";
echo"<input type='text' name='pincode' id='name' placeholder='   Enter Pincode' required>";
echo"</td>"; 
echo"</tr>";  
echo"<tr>";
echo"<td>Email-Id:</td>";
echo"<td id='ab'>";
echo"<input type='email' name='email' id='name' placeholder='   Enter Email Id' required>";
echo"</td>"; 
echo"</tr>"; 
echo"<pre>"; 
echo"<tr><td>Crops You grow:</td><td>
<table cellpadding='10px;'><tr><td><input type='checkbox' name='crop[]' value='POTATO'>Potato </td> <td><input type='checkbox' name='crop[]' value='TOMATO'>Tomato</td> <td> <input type='checkbox' name='crop[]' value='WHEAT'>wheat</td></tr>
<tr><td><input type='checkbox' name='crop[]' value='RICE'>Rice</td><td><input type='checkbox'name='crop[]' value='SUGARCANE'>SugarCane</td><td><input type='checkbox' name='crop[]' value='ONION'>Onion</td></tr>
<tr><td><input type='checkbox' name='crop[]' value='COTTON'>Cotton</td><td><input type='checkbox' name='crop[]' value='BAJRA'>Bajra</td></tr>
</table></td></tr>";
echo"</table>";

echo" <input type='submit' value='SUBMIT' id='sub'>";
echo"</form>";
	}
	
else {
	echo "<ul>";
  
  echo "<li style='float:right; font-size:25px;'>";
  echo "<a href='#news'>News</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#contact'>Contact</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#about'>About</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#about'>".$row[0]."</a></li>";
  echo "<li style='float:right; font-size:25px;'>";
  echo "<a  href='#home'>Home</a></li>";
  
echo "</ul>";
 echo "<br><br><br>";
    echo "<center><h3> Welcome <font color='BLUE'>" .$row[0];
	echo"<hr>";
	echo"</center>";
	echo"</font>";
	echo"<center><h2>PROFILE";
	echo"</h2>";
	echo"</center>";
	
	
	echo"<div id='dtb'>";
	echo"<center><table cellpadding='10' cellspacing='5'>";
echo"<tr>";

echo"<td>Name</td>";
echo"<td 
id='ab'>".$row[0]."</td>";
echo"</tr>";
echo"<td>Email</td>";
echo"<td 
id='ab'>".$row[1]."</td>";
echo"</tr>";
echo"<td>Contact</td>";
echo"<td 
id='ab'>".$row[3]."</td>";
echo"</tr>";
echo"<tr>";

echo"<td>Address</td>";
echo"<td 
id='ab'>".$row[4]."</td>";
echo"</tr>";
echo"<tr>";

echo"<td>State</td>";
echo"<td 
id='ab'>".$row[5]."</td>";
echo"</tr>";
echo"<tr>";

echo"<td>City</td>";
echo"<td 
id='ab'>".$row[6]."</td>";
echo"</tr>";
echo"<tr>";

echo"<td>Pincode</td>";
echo"<td 
id='ab'>".$row[7]."</td>";
echo"</tr>";
echo"<td>Crops</td>";
echo"<td 
id='ab'>".$row[8]."</td>";
echo"</tr>";
echo"</table>";
echo"</div>";
echo"<br><br>";
echo"<hr>";
}

 $k=0;
	break;
 }
	
	
}

if($k==1)
{
	echo "<ul>";
  
  echo "<li style='float:right; font-size:25px;'>";
  echo "<a href='#news'>News</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#contact'>Contact</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#about'>About</a></li>";
  echo "<li style='float:right;font-size:25px;'>";
  echo "<a href='#about'>".$row[0]."</a></li>";
  echo "<li style='float:right; font-size:25px;'>";
  echo "<a  href='#home'>Home</a></li>";
  
echo "</ul>";
echo"<div id='dtb' style='margin-top:100px; padding-left:50px; padding-top:50px; padding-bottom:50px;'><center><img src='smile.jpg' height=60><br><font face='Comic Sans MS, cursive'>Sorry Wrong Id or Password. </font> <h3 style='color:red;'><a href='project.php'>Login again</center></a></h3></div>";}
?>
	</body>
    </html>


