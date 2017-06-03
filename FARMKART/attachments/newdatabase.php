<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="form" id="frm"  method="post" action="database.php">
<table width="1000px" border="0" bgcolor="#CCCCCC">
  <tr>
    <td>Name</td>
    <td>:</td>
    <td><input type="text"  name="name" id="name" value="" /></td>
  </tr>
  <tr>
    <td>Age</td>
    <td>:</td>
    <td><input type="text" name="age" id="age" value="" /></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>:</td>
    <td><input type="radio" name="gender" value="Male">Male &nbsp; <input type="radio" name="gender" value="Female"> Female</td>
  </tr>
  <tr>
    <td>Mobile No</td>
    <td>:</td>
    <td><input type="text" name="mobile_no" id="mobile_no" value="" /></td>
  <tr>
    <td>Pincode</td>
    <td>:</td>
    <td><input type="text" name="pincode" id="pincode" value="" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td>:</td>
    <td><textarea name="address" cols="30" rows="7"></textarea></td>
  </tr>
  <tr>
  <td><input type="submit" name="submit" value="save" /></td>
  <td><input type="reset" name="submit" value="clear" /></td>
  </tr>
</table>
<input type="hidden" name="frm" value="contact_us">
</form>
</body>
</html>
