<html>
<head>
<title>Nature</title>
<script>
var a=new Array(4);
a[0]=new Image();
a[0].src="pic/h5.jpg";

a[1]=new Image();
a[1].src="pic/h6.jpg";

a[2]=new Image();
a[2].src="pic/r3.jpg";

a[3]=new Image();
a[3].src="pic/r5.jpg";

var i=0;
function demo()
{
	document.getElementById("m1").src=a[i].src;
	i++;
	if(i==4)
		i=0;
	
	setTimeout("demo()",2000);
}
</script>

<style>
.aa
{
	text-decoration:none;
	color:white;

}
.aa:hover{
color:black;
}
.bb
{
   width:200px;
   text-align:center;
   background-color:pink;
   color:black;
   
   
}
.bb:hover
{
	background-color:skyblue;
	color:black;
}
.ss{
	padding:25px 25px 25px 25px;
	font-size:30px;
	line-height:50px;
	color:black;
	//width:400px;
	height:400px;
}
.pp{
	color:white;
}

</style>

</head>
<body onLoad="demo();" style="background-image:url(pic/b3.jpg);background-size:100% 100%;">
<table align="center" border="0" width="100%" cellspacing="0" cellpadding="0" style="background-image:url(pic/m.jpg);background-size:100% 100%;">
<tr height="150">
<td colspan="5" align="center">
<table >

<tr>

<td align="center">
&nbsp;&nbsp;&nbsp;
<font color="Purple" size="72"><h3>Getting Crowned By Nature</h3>
</font>

</td>
</tr>
</table>
</td></tr>

<tr height="30">
<td class="bb">
<a href="Home.php" class="aa">Home</a>
</td>

<td class="bb">
<a href="Chemicals.php" class="aa">Chemicals</a>
</td>

<td class="bb">
<a href="shop.php" class="aa">Shops</a>
</td>

<td class="bb">
<a href="adminlogin.php" class="aa">Admin</a>
</td>

<td class="bb">
<a href="Userlogin.php"class="aa">User</a>
</td>

</tr>

<tr>
<td colspan="5">

<br>
<h1 style="color:blue;"><p align="center">Chemicals Information</h1></p>
<table  align="center"  width="80%" border="0">
<tr>
<td>
<img  src="" />
</td>
<td><b><a href="Chesls.php" style="color:black;font-size:20px;">Sodium Lauryl Sulfate (SLS)</a></b><br /><br>
<div style="line-height:30px;font-size:20px;">
SLS is an emulsifier and foaming agent commonly used in cosmetic products and industrial cleaners.
<br><br>

</div>
</td>
<td>
<img  src="" />
</td>
<td><b><a href="Chesles.php" style="color:black;font-size:20px;">Sodium Laureth Sulfate (SLES)</a></b><br /><br>
<div style="line-height:30px;font-size:20px;">
Sodium laureth sulfate (SLES) is a surface-active agent or surfactant, which is partly soluble in water and is partly soluble in oil. 
<br><br>

</div>
</td>
</tr>
<tr>
<td>
<img  src="" />
</td>
<td><b><a href="Cheparabens.php" style="color:black;font-size:20px;">Parabens</a></b><br /><br>
<div style="line-height:30px;font-size:20px;">
Parabens are the man-made preservative chemicals. They are cost-effective and provide protection against micro-organisms for an extended period of time.
<br><br>

</div>
</td>
<td>
<img  src="" />
</td>
<td><b><a href="Chepeg.php" style="color:black;font-size:20px;">Polyethylene Glycol (PEG)</a></b><br /><br>
<div style="line-height:30px;font-size:20px;">Manufacturers use Polyethylene Glycol (PEG) to help their products absorb deeply into skin to increase their effectiveness. PEGs can cause an opposite response to the goal of most skincare products. PEGs are a serious health risk when applied to skin.
<br><br>

</div>
</td>
</tr>



<tr>
<td>
<img  src="" />
</td>
<td><b><a href="Chefragrence.php" style="color:black;font-size:20px;"><br>Fragrance Chemicals</a></b><br /><br>
<div style="line-height:30px;font-size:20px;">
Fragrance chemicals are organic compounds that volatilize, or vaporize into the air, which is why we can smell them. 

<br><br>

</div>
</td>



</tr>




</table>
<br>
</td>
</tr>
<tr><td height="30" colspan="5" style="background-color:skyblue;color:white;">

<marquee><p class="pp">Copyright @ 2019 Getting Crowned By Nature</p>

</marquee>
</body>
</html>
