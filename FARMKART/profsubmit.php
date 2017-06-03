<html>
<head></head>
<body>
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
#dtb
{
	box-shadow: 2px 2px 8px 5px grey;
	margin-left:400px;
	margin-right:400px;
}
</style>

<?php
session_start();
$dbfile = mysqli_connect("localhost","root","");
mysqli_select_db($dbfile,"project");     
     $add=$_POST["address"];
	 $state=$_POST["state"];
	 $city=$_POST["city"];
	 $pincode=$_POST["pincode"];
	 $email=$_POST["email"];
	 $crops=$_POST["crop"];
	 $chk="";
	 $s="select * from fsignup";
$result= mysqli_query($dbfile,$s);
$count= mysqli_num_rows($result);
foreach($crops as $chk1)  
   {  
      $chk .= $chk1.",";  
   }   
for($i=0;$i<$count;$i++)
{
	$row= mysqli_fetch_row($result);
 if ($email==$row[1])
    {
		 $s=" update fsignup
		      set address='".$add."',
			   state='".$state."',
			 city='".$city."',
			 pincode='".$pincode."',
			 Crops='".$chk."'
			  where emailid='".$email."'";
		         
       break;
}
}
     if(mysqli_query($dbfile,$s))
    { echo"<div id='dtb' style='margin-top:100px; padding-left:50px; padding-top:50px; padding-bottom:50px;'><center><img src='smile.jpg' height=60><br><font face='Comic Sans MS, cursive'>Successfully Completed </font></div>";
	}
     else
     echo mysqli_error($dbfile);
    
    ?>
	</body>
    </html>
    