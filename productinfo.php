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
   background-color:green;
   color:black;
   
   
}
.bb:hover
{
	background-color:lightgreen;
	color:black;
}
.ss{
	padding:25px 25px 25px 25px;
	font-size:20px;
	line-height:40px;
	color:black;
	width:400px;
}
.pp{
	color:white;
}

</style>
</head>
<body onLoad="demo();" style="background-image:url(pic/b3.jpg);background-size:100% 100%;">
<?php
include("config.php");

?>
<table align="center" border="0" cellspacing="0" cellpadding="0" background="pic/t4.jpg">
<tr height="150">
<td colspan="5">
<table >

<tr>

<td>
&nbsp;&nbsp;&nbsp;
<font color="red" size="5">Getting Crowned By Nature
</font>
<br><br>
<font color="maroon" size="3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;back to mother nature
</td>
<td>
<img src="pic/h1.jpg" width="150">
<img src="pic/h2.jpg" width="170">
<img src="pic/h4.jpg" width="150">
<img src="pic/h3.jpg" width="150">


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
<?php


if(!$connection)
	{
		echo "connection error ".mysqli_connect_error();
	}
	else
	{
		$prodid=$_REQUEST['id'];
		$query="select *from productdetail where productid=$prodid";

		$result=mysqli_query($connection,$query);
			echo mysqli_error($connection);
			echo "<table align='center'  width='600' border='0' cellspacing='5' cellpadding='5' >";
			
			while($r=mysqli_fetch_assoc($result))
			{
				echo "<h1 style='color:maroon;'><p align='center'>".$r['productname']."</h1></p>";

				
				$a=$r['image'];
				$i=$r['productid'];
				echo "<tr><td width='150'><b>Product Id:</td><td width='50'>".$r['productid']."</td></tr>";
				echo "<tr><td><b>Product Name:</td><td>".$r['productname']."</td></tr>";
				echo "<tr><td><b>Shop Name:</td><td>".$r['shopname']."</td></tr>";
				echo "<tr><td><b>Ingredients:</td><td>".$r['ingredients']."</td></tr>";
				echo "<tr><td><b>Quantity:</td><td>".$r['quantity']."</td></tr>";
				echo "<tr><td><b>Benefits:</td><td>".$r['benefits']."</td></tr>";
				echo "<tr><td><b>Price(Rs):</td><td>".$r['price']."</td></tr>";
				//echo "<tr><td><a href='#'>Add To Cart</a></td><td><a href='productinfo.php?id=$i'>View Detail</a></td></tr>";
				//echo "<tr><td colspan='3'><hr></td></tr>";
				echo "<tr><td><b>Shelf Life:</td><td>".$r['shelflife']."</td></tr>";
				echo "<tr><td colspan='2'><marquee>
				<img src='product/$a' width='200' height='200'>
				<img src='product/$a' width='200' height='200'>
				<img src='product/$a' width='200' height='200'>
				
				</marquee></td></tr>";
					
		

		}
		echo "<tr><td colspan='2' align='right'><a href='product.php'>Products</a></td></tr>";

			echo "</table>";
	}



?>


<br>

</td>
</tr>
<tr><td height="30" colspan="5" style="background-color:green;color:white;">

<marquee><p class="pp">Copyright @ 2019 Getting Crowned By Nature</p>

</marquee>
</body>
</html>
