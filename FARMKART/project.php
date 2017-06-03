<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="project.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>


$(document).ready(function(){
 $("#ah").mouseover(function(){
    $("#ah").animate({
        
        width: '150px'
		
    });
	$("#ah").text("Home");
	$("#ah").attr("href","my.html");
	$("#ah").css({"color":"white","padding-left":"50px","font-size":"30px","font-family":"Copperplate Gothic","padding-bottom":"5px"});
});
});
$(document).ready(function(){
 $("#ah").mouseout(function(){
    $("#ah").animate({
        
        width: '40px'
    });
	$("#ah").text("   ");
	$("#ah").css({"color":"white","padding-left":"0px","font-size":"30px","padding-bottom":"0px"});
});
});
$(document).ready(function(){
 $("#bh").mouseover(function(){
    $("#bh").animate({
        
        width: '150px'
		
    });
	$("#bh").text("About Us");
	$("#bh").attr("href","Aboutus..php");
	$("#bh").css({"color":"white","padding-left":"50px","font-size":"20px","font-family":"Copperplate Gothic"});
});
});
$(document).ready(function(){
 $("#bh").mouseout(function(){
    $("#bh").animate({
        
        width: '40px'
    });
	$("#bh").text("   ");
	$("#bh").css({"color":"white","padding-left":"0px","font-size":"30px","padding-bottom":"0px"});
});
});
function showsignupform()
{
	 document.getElementById("panel").style.display="block";
	 document.getElementById("login-form").style.display="none";
	  document.getElementById("a").innerHTML="SIGNUP";
}
function showloginform()
{

	document.getElementById("login-form").style.display="block";
	 document.getElementById("panel").style.display="none";
	 document.getElementById("a").innerHTML="LOGIN";
}
function valid()
{
	var x= document.myform.pswd.value;
	var y=document.myform.contact.value;
  if(x.length<8)
  {
	   alert("password must be of 8 characters");
	   return false;
  }
  if(y.search(/^[0-9]+$/))
{ alert('Contact requires only numeric digits');
 return false;
}
  else
  return true;
}
function strength()
{
var x= document.myform.pswd.value;
if(x.length<3)
{
	document.getElementById("sp").innerHTML="poor";
document.getElementById("sp").style.color="red";
}
else if(x.length>3&&x.length<5)
{
	document.getElementById("sp").innerHTML="bad";
document.getElementById("sp").style.color="red";
}
else if(x.length>5&&x.length<9)
{
	document.getElementById("sp").innerHTML="Good";
document.getElementById("sp").style.color="green";
}
else if(x.length>9)
{
		document.getElementById("sp").innerHTML="Excellent";
document.getElementById("sp").style.color="green";
}
}

</script>

</head>
<body>



<div id="img">
<img src="Screenshot (31).png">

<h3 id="a"><legend> LOGIN</legend></h3>
 <div class="form" id="login-form">
<form method="post" action="login.php">

<table cellpadding="5px" cellspacing="5px">

<tr><td id="fields">Email:</td><td>
<input type="email" placeholder="    Enter email" id="name" name="email" required></td></tr>
<tr><td id="fields">Password:</td><td>
<input type="password" placeholder="   Enter password" id="name" name="pswd" required></td></tr>

</table>
<center>
<br>
<br>
    <input type="submit" value="SUBMIT"  style="border-radius:4px; color:white; background-color:black; border:solid; padding-left:10px; padding-right:10px; cursor:pointer; height:40px; width:100px;"></center></form>
                </form>
                <br>
                
                <span >
                    Don't have an account? <span class="signup" onclick="showsignupform();" style="cursor:pointer; color:green;">Sign Up</span> 
                </span>
            </div>
<div  class="form" id="panel">

<form method="post" action="fsubmit.php" name="myform" onSubmit="return(valid());">

<table cellpadding="5px" cellspacing="5px">
<tr><td id="fields">Name:</td><td>
<input type="text" placeholder="  Enter name" id="name"  name="name" required></td></tr>
<tr><td id="fields">Email:</td><td>
<input type="email" placeholder="  Enter email" id="name" name="email" required></td></tr>
<tr><td id="fields">Password:</td><td>
<input type="password" placeholder="  Enter password" id="name" name="pswd" required onKeyDown="strength();"><span>Strength:</span><span id="sp"></span></td></tr>

<tr><td id="fields">Contact:</td><td>
<input type="text" placeholder="   Enter Contact No." id="name" name="contact" required></td></tr>
</table><center>
<br><br>
<input type="submit" value="SUBMIT"  style="border-radius:4px; color:white; background-color:black; border:solid; padding-left:10px; padding-right:10px; cursor:pointer; height:40px; width:100px;"></center></form><br>

 <span>
                    Already have an account? <span class="signup" style="color:green; cursor:pointer" onclick="showloginform();"  >Log In</span> 
                </span>


</div>


<h4><a href="#" id="ah"></a></h4>
<h4 ><a href="#" id="bh"></a></h4>

</div>



</body>
</html>
