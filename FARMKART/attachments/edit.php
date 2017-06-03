<?php
session_start();
$dbfile = mysql_connect("localhost","root","");
mysql_select_db("mydatabase",$dbfile);
$sql = mysql_query("SELECT * FROM mydata where sno='".$_REQUEST['id']."'");
$rt = mysql_fetch_array($sql);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="contact" name="contact" method="post" action="edit_submit.php" enctype="multipart/form-data">
  <table width="419" border="0" style="border: 1px solid #099; font-family:Georgia, 'Times New Roman', Times, serif;" cellpadding="3" cellspacing="4">
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
      <td width="181" align="left" valign="top">Name</td>
      <td width="31" align="left" valign="top">:</td>
      <td width="185" align="left" valign="top"><label>
        <input type="text" name="name" id="name" required value="<?php echo $rt['name']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td align="left" valign="top">Age</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top">
      <input type="hidden" value="<?php echo $_REQUEST['id']; ?>" name="hid_sno_no">
      <input type="text" name="age" id="age" value="<?php echo $rt['age']; ?>" required/></td>
    </tr>
    <tr>
      <td align="left" valign="top">Gender</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top">Male <input type="radio" name="gender" id="gender" value="male" required <?php if($rt['gender']=="male") { ?> checked <?php } ?>/> &nbsp;Female<input type="radio" name="gender" id="gender" value="female" <?php if($rt['gender']=="female") { ?> checked <?php } ?>/></td>
    </tr>
    <tr>
      <td align="left" valign="top">Email</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input type="email" name="email" id="email" value="<?php echo $rt['email']; ?>" required/></td>
    </tr>
    <tr>
      <td align="left" valign="top">Qualification</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><select name="qualification" id="qualification" required>
      <option value="highschool" <?php if($rt['quilification']=="highschool") { ?> selected <?php } ?>>highschool</option>
      <option value="intermediat" <?php if($rt['quilification']=="intermediat") { ?> selected <?php } ?>>intermediat</option>
      <option value="BA" <?php if($rt['quilification']=="BA") { ?> selected <?php } ?>>BA</option>
      <option value="bsc" <?php if($rt['quilification']=="bsc") { ?> selected <?php } ?>>B Sc</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="top">Address</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label>
        <textarea name="address" id="address" cols="45" rows="5"><?php echo $rt['address']; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td align="left" valign="top"><label>
        <input type="submit" name="submit" id="submit" value="Save" />
      </label></td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input type="reset" name="submit2" id="submit2" value="Clear" /></td>
    </tr>
  </table>
  <input type="hidden" name="contact" value="contactus" />
</form>
</body>
</html>