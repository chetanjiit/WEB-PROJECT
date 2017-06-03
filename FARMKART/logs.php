<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","chat_box");
 $result1=mysqli_query($con,"select * from logs");
$extract =mysqli_fetch_array($result1);
while($extract)
{
	$extract =mysqli_fetch_array($result1);
echo "<span class='uname'>".$extract['username']."</span>: <span class='msg'>" . $extract['msg'] . "</span><br>";
}
?>
<style>
 /* .msg{
	 background:#13212B;
	position:relative;
	} 
 */	
</style>
</body>
</html>