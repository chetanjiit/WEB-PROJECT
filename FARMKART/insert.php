<?php
$uname=$_REQUEST["uname"];
$msg=$_REQUEST["msg"];
//echo $uname;
$con=mysqli_connect("localhost","root","","chat_box");
/*if($con){ 
 echo "connected to MySQL: ";
}
else
echo "problem";
*/
$data=mysqli_query($con,"insert into logs(username,msg) values('$uname','$msg')");
/*if($data)
    {
    echo "YOUR REGISTRATION IS COMPLETED...";
	}
	else
	echo "error in signup";
*/
 
$result1=mysqli_query($con,"select * from logs order by id desc");
$extract =mysqli_fetch_array($result1);
while($extract)
{
	$extract =mysqli_fetch_array($result1);
echo $extract['username'].": " . $extract['msg'] . "<br>";
}
?>