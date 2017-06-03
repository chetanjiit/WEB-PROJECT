<html>
<head>
<link rel="stylesheet" href="fsubcss.css">
</head>
<body>
<?php
session_start();
$dbfile = mysqli_connect("localhost","root","");
mysqli_select_db($dbfile,"project");     
     $nme=$_POST["name"];
	 $email=$_POST["email"];
	 $pswrd=$_POST["pswd"];
	 $contact=$_POST["contact"];
     $s="insert into fsignup(name,emailid,password,contact) values('".$nme."','".$email."','".$pswrd."','".$contact."')";
    
     if(mysqli_query($dbfile,$s))
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
    echo"<div id='dtb' style='margin-top:100px; padding-left:50px; padding-top:50px; padding-bottom:50px;'><center><img src='happy.jpg' height=60><br><font face='Comic Sans MS, cursive'>You are succesfully registered. </font> </div>";
	 }else
     echo mysqli_error($dbfile);
    
    ?>
</body>
</html>