<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
enter name:<input type="text" name="name" />
<input type="submit" name="submit" value="save" />
</form>
<form method="post" action="fetch.php">
<input type="submit" value="fetch" />
</form>
</body>
</html>
<?php
session_start();
$dbfile = mysqli_connect("localhost","root","");
mysqli_select_db($dbfile,"mydtb");     
     $nme=$_POST["name"];
     $s="insert into data values('".$nme."')";
    
     if(mysqli_query($dbfile,$s))
     echo "record save";
     else
     echo mysqli_error($dbfile);
    
    ?>
