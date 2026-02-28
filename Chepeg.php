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
<td colspan="5" align="center">
<table >

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
<h2 style="color:maroon;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Polyethylene Glycol (PEG)</h2>
<table  border="0" style="padding:25px;">
<tr>
<td><h4>Description:</h4></td><td></td><td rowspan="6">
<img src="pic/che4.jpg" width="200" height="400">


</td>

</tr>
<tr>
<td>


</td>
<td>
<div style="width:500;">

Manufacturers use Polyethylene Glycol (PEG) to help their products absorb deeply into skin to increase their effectiveness. PEGs can cause an opposite response to the goal of most skincare products. PEGs are a serious health risk when applied to skin. Like the other glycols, they can be more irritating to skin than helpful, and the leave the body vulnerable to cancer and other diseases.

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
It can create skin rashes and contact dermatitis, and also robs the skin of its natural moisture. It can also irritate skin further and cause system toxicity. Moreover, the contaminants often found in PEGs are known carcinogens. Specifically, they have been linked to breast cancer, leukemia, brain and nervous system cancer, bladder cancer, stomach cancer and pancreatic cancer, as well as Hodgkin’s disease. They have proved to interfere with development, especially the nervous system, and may cause kidney and liver organ toxicity.
</div>
</td>

</tr>
<tr>
<td><h4>Products containing PEG:</h4></td>

</tr>
<tr>
<td>


</td>
<td>
<div style="width:500;">

Some of the products which contains PEGs are baby bath wash, baby lotion, moisturizer, deodorant, facial moisturizer, concealer , foot cream, conditioner.
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
