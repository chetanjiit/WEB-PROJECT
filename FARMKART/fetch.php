<?php
session_start();
$dbfile = mysqli_connect("localhost","root","");
mysqli_select_db($dbfile,"mydatabase");
$s="select * from mydata";
$result= mysqli_query($dbfile,$s);
$count= mysqli_num_rows($result);
for($i=0;$i<$count;$i++)
{
	$row= mysqli_fetch_row($result);
echo "id: " .$row[0]."<br>";
echo "email " .$row[1]."<br>";
"<hr>";
}
?>

<html>
<head>
</head>
<body>
<h1>Welcome akshshs</h1>
</body>
</html>