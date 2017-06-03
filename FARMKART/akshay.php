<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>

	function answers()
{
var answer=document.getElementById("mySelect");
 if(answer[answer.selectedIndex].value=="Alluvial Soil"){
document.getElementById("opt1").style.display="block";
	 document.getElementById("opt").style.display="none";
	 document.getElementById("pic").style.display="block";
	

}
if(answer[answer.selectedIndex].value=="Black Soils"){
document.getElementById("opt2").style.display="block";
	 document.getElementById("opt").style.display="none";
	 document.getElementById("pic").style.display="block";

}
if(answer[answer.selectedIndex].value=="Desert Soils"){
	 document.getElementById("opt").style.display="none";
	 document.getElementById("pic").style.display="block";
	   document.getElementById("opt3").style.display="block";

}
if(answer[answer.selectedIndex].value=="Laterite Soils"){
	 document.getElementById("opt").style.display="none";
	 document.getElementById("pic").style.display="block";
	   document.getElementById("opt4").style.display="block";

}
if(answer[answer.selectedIndex].value=="Mountain Soils"){
	 document.getElementById("opt").style.display="none";
	 document.getElementById("pic").style.display="block";
	   document.getElementById("opt5").style.display="block";

}
if(answer[answer.selectedIndex].value=="Red and Yellow Soils"){
document.getElementById("opt").style.display="none";
	document.getElementById("pic").style.display="block";
	   document.getElementById("opt6").style.display="block";

}
}

	function answer1()
{

document.getElementById("opt").style.display="block";
	 document.getElementById("opt1").style.display="none";
	  document.getElementById("pic").style.display="none";
	  document.getElementById("opt2").style.display="none";
  document.getElementById("opt3").style.display="none";
    document.getElementById("opt4").style.display="none";
	document.getElementById("opt5").style.display="none";
	document.getElementById("opt6").style.display="none";

}


</script>

<ul>
  
  <li style="float:right; font-size:25px;">
  <a href="#news">News</a></li>
   <li style="float:right;font-size:25px;">
   <a href="#contact">Contact</a></li>
  <li style="float:right;font-size:25px;">
   <a href="#about">About</a></li>
  
   <li style="float:right; font-size:25px;">
   <a  href='my.php'>Home</a></li>
  
</ul>
<br /><br /><br />
<center>
<h2 id="head">EXPERT ADVICE</h2></center>
<img src="images.jpg" align="left" id="pic" /><center>
<h3>Select the soil and our expert will advise you which crop to grow??</h3>
</center><br /><br /><br />
<center>
<div id="opt"><br /><br /><p>    Soil Type     </p>            <select name="st" id="mySelect">
<option>Alluvial Soil</option>
<option>Black Soils
</option>
<option>Desert Soils</option>
<option>Laterite Soils</option>
<option>Mountain Soils</option>
<option>Red and Yellow Soils</option>
</select><br><br />
</b>
<br /><br /><br />
<input type="submit" value="SUBMIT" id="sub" onclick="answers();"><br /><br /><br /></div>
<pre><div id="opt1"> <h2>Alluvial Soils</h2>
 This type of soil is common
in Northern India,particularly in the delta
regions. Alluvial soils are deposited by 
rivers and are rich in some nutrients 
(particularly potash and humus), but are
lacking in nitrogen and phosphorous. 
They tend to be sandier and quicker-draining 
than many other soils.<mark> Rice, wheat, sugarcane,
cotton and juteall</mark> grow well in these soils.
<br /><input type="submit" id="btn" value="Ok" onclick="answer1();"  /></div></pre>
<pre><div id="opt2"> <h2>Black Soil</h2>
Black soil gets its color from various salts
or from humus. It contains a large amount of 
clay, but is sandy as well in hillier regions.
This soil contains moderate amounts of phosphorous
but is poor in nitrogen. This type of soil is also
used for <mark>rice, wheat, sugarcane and cotton. It is 
additionally used to grow groundnut, millet and oilseeds.</mark>
<br /><input type="submit" id="btn" value="Ok" onclick="answer1();"  /></div></pre>
<pre><div id="opt3"> <h2>Desert Soil</h2>
Desert soils are sandy and dry. They do contain
nitrogen, but are suitable for agriculture only
if there is a sufficient water supply. Generally
only drought-resistant crops such as <mark> barley and
millet</mark> can grow in this type of soil.
<input type="submit" id="btn" value="Ok" onclick="answer1();"  /></div></pre>
<pre><div id="opt4"> <h2>Laterite Soils</h2>
These soils are found in areas of India with
heavy rainfall, particularly near the coasts.
It is an acidic soil and is rich in iron, which
gives the soil a somewhat red appearance. It
is used to grow more tropical crops such as 
<mark>cashew, rubber, coconut, tea and coffee.</mark>
<br /><input type="submit" id="btn" value="Ok" onclick="answer1();"  /></div></pre>
<pre><div id="opt5"> <h2>Mountain Soils</h2>
These soils are found in the Himalayas and 
contain significant amounts of organic matter.
They are somewhat acidic, but suitable for
growing <mark>tea, coffee, spices and many types
of tropical fruits.</mark>
<br /><input type="submit" id="btn" value="Ok" onclick="answer1();"  /></div></pre>
<pre><div id="opt6"> <h2>Red and Yellow Soils</h2>
Red and yellow soils get their names from the
very large amounts of iron oxide present in them.
They are sandy and somewhat acidic, and are also
low in nitrogen and phosphorous. Despite this,
red and yellow soils are used to grow 
<mark>rice, wheat, sugarcane, millet, groundnut,
ragi and potato.</mark>
<br /><input type="submit" id="btn" value="Ok" onclick="answer1();"  /></div></pre>

</center>
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
	margin-left:-10px;
	margin-right:500px;
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
h2
{
	font-family:arial;
	background-color:black;
	color:white;
margin-left:-2px;
	
}
#head
{
	font-family:arial;
	background-color:midnightblue;
	color:white;
	margin-left:-2px;
	padding-top:5px;
	padding-bottom:5px;
	margin-left:-50px;
	margin-right:-30px;
}
#sub
{
	border-radius:4px;
	color:white;
	 background-color:black;
	  border:solid; 
	  padding-left:10px;
	   padding-right:10px;
	    cursor:pointer;
		height:40px;
		 width:100px;
}
h3
{
	color:blue;
	font-family:Segoe Script;
	
}
select
{
	background-color:white;
	width:250px;
	height:40px;
	color:black;
}
p
{
	color:white;
	font-family:Copperplate Gothic Bold;
	font-size:25px;
	background-color:red;
	corner-radius:5px;
	padding-top:5px;
	padding-bottom:5px;
	
}
div
{
	
	box-shadow: 2px 2px 8px 5px grey;
	margin-left:400px;
	margin-right:400px;
	
	
}
#opt
{
    display:block;
	
}

#opt1 ,#opt2,#opt3,#opt4,#opt5,#opt6
{
	display:none;
	font-size:20px;
	color:black;
	font-family:Arial, Helvetica, sans-serif;
		padding-top:5px;
		padding-bottom:5px;
		background-image:url(WSHLp1.jpg);
	
		
		
}


#btn
{
	border-radius:4px;
	 color:white;
	  background-color:black; 
	  border:solid;
	   padding-left:10px; 
	   padding-right:10px;
	    cursor:pointer; height:40px; 
	width:100px;
}
#pic
{
	display:none;
}

</style>
</body>
</html>
