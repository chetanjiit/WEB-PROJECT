<?php
session_start();
$dbfile = mysql_connect("localhost","root","");
mysql_select_db("mydatabase",$dbfile);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="contact" name="contact" method="post" action="database.php" enctype="multipart/form-data">
  <table width="100%" border="0" style="border: 1px solid #099; font-family:Georgia, 'Times New Roman', Times, serif;" cellpadding="3" cellspacing="4">
    <?php
    if(@$_SESSION['success'])
    {
    ?>
    <tr>
      <td width="397" align="left" valign="top" colspan="3">
		<font color="#008000" style="font-size: 12px"><?php echo $_SESSION['success']; ?></td>
    </font>
    </tr>
    <?php
    $_SESSION['success']="";
    }
    ?>
    <tr>
      <td width="181" align="left" valign="top">&nbsp;</td>
      <td width="31" align="left" valign="top">&nbsp;</td>
      <td width="185" align="left" valign="top">
		<p align="right"><font color="#000080"><b><a href="contact_us.php"> 
		Add New Records</a></b></font></td>
    </tr>
    <tr>
      <td align="left" valign="top" colspan="3">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
		<?php
    if(@$_SESSION['success'])
    {
    ?>
    <tr>
      <td width="397" align="left" valign="top" colspan="8">
		<font color="#008000" style="font-size: 12px"><?php echo $_SESSION['success']; ?></td>
    </font>
    </tr>
    <?php
    $_SESSION['success']="";
    }
    ?>

			<tr>
				<td height="30"><b><span style="font-size: 15px">Sno</span></b></td>
				<td height="30"><b><span style="font-size: 15px">Name</span></b></td>
				<td height="30"><b><span style="font-size: 15px">Age</span></b></td>
				<td height="30"><b><span style="font-size: 15px">Gender</span></b></td>
				<td height="30"><b><span style="font-size: 15px">Email</span></b></td>
				<td height="30"><b><span style="font-size: 15px">Qualification</span></b></td>
				<td height="30"><b><span style="font-size: 15px">Address</span></b></td>
				<td height="30">
				<p align="center"><b><span style="font-size: 15px">Actions</span></b></td>
			</tr>
			<?php
			$sql = mysql_query("SELECT * FROM mydata") or die(mysql_error());
			if(mysql_num_rows($sql)!="0")
			{
			$sno=1;
			while($rt = mysql_fetch_array($sql))
			{
			?>
				<tr>
				<td><?php echo $sno; ?></td>
				<td><?php echo $rt['name']; ?></td>
				<td><?php echo $rt['age']; ?></td>
				<td><?php echo $rt['gender']; ?></td>
				<td><?php echo $rt['email']; ?></td>
				<td><?php echo $rt['quilification']; ?></td>
				<td><?php echo $rt['address']; ?></td>
				<td>
				<p align="center"><a href="edit.php?id=<?php echo $rt['sno']; ?>">Edit&nbsp;</a> |&nbsp; <a href="delete.php?id=<?php echo $rt['sno']; ?>">Delete</a></td>
			</tr>				
			<?php	
			$sno++;
			}
			}
			else
			{
			?>
			<tr><td colspan="8">No Data Found!</td></tr>
			<?php
			}
			?>
		</table>
		</td>
    </tr>
  </table>
  <input type="hidden" name="contact" value="contactus" />
</form>
</body>
</html>