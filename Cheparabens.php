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
div{

font-size:20px;
line-height:30px;
}
h4
{
	font-size:20px;
}
</style>

</head>
<body onLoad="demo();" style="background-image:url(pic/b3.jpg);background-size:100% 100%;">
<table align="center" border="0" width="100%" cellspacing="0" cellpadding="0" style="background-image:url(pic/m.jpg);background-size:100% 100%;">
<tr height="150">
<td colspan="5">
<table  align="center">

<tr>

<td align="center">
&nbsp;&nbsp;&nbsp;
<font color="Purple" size="72"><h3>Getting Crowned By Nature</h3>
</font>

</td></tr>
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
<td colspan="5" align="center">

<br>
<h2 style="color:maroon;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parabens</h2>
<table  border="0" style="padding:25px;">
<tr>
<td><h4>Description:</h4></td><td></td><td rowspan="6">
<img src="pic/che3.jpg" width="200" height="300">


</td>

</tr>
<tr>
<td>


</td>
<td>
<div style="width:500;">

Parabens are the man-made preservative chemicals. They are cost-effective and provide protection against micro-organisms for an extended period of time. There are multiple types of parabens and some of the frequently used parabens are methyl, propyl and butylparaben. They are mostly used in beauty products. 
</div>
</td>

</tr>
<tr>
<td><h4>Side Effects:</h4></td>

</tr>
<tr>
<td>


</td>
<td>
<div style="width:500;">

Parabens act like estrogen, which may increase the risk of women developing estrogen-positive breast cancer. Researchers conducted tests on 20 different samples of human breast tumors, which revealed parabens to be present in each sample. This study was the first to indicate the seeping of these substances from the outer skin during application to underlying tissue.
</div>
</td>

</tr>
<tr>
<td><h4>Products containing Parabens:</h4></td>

</tr>
<tr>
<td>


</td>
<td>
<div style="width:500;">

Parabens are used by manufacturers in a variety of domestic products. Some of them are cosmetics, lotions and moisturizers, shampoo, shaving, and tanning products.
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
