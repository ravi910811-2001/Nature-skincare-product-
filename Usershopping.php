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
<form name="f" method="post">
<?php
include("config.php");
session_start();
?>



<table align="center" border="0" cellspacing="0" cellpadding="0" background="pic/t4.jpg">
<tr height="150">
<td colspan="4">
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
<a href="Userprofile.php" class="aa">My Profile</a>
</td>

<td class="bb">
<a href="Usershopping.php" class="aa">Shopping</a>
</td>

<td class="bb">
<a href="Userorderinfo.php"class="aa">Orders</a>
</td>

<td class="bb">
<a href="Home.php"class="aa">Logout</a>
</td>



</tr>

<tr>
<td colspan="4">
<br>
<p align="right">
<?php
if(isset($_SESSION['user']))
{
	echo "Welcome ".$_SESSION['user'];
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>

</td>
</tr>

<tr>
<td colspan="4">


<br>
<h1 style="color:maroon;"><p align="center">Product Detail </h1></p>
<?php


if(!$connection)
	{
		echo "connection error ".mysqli_connect_error();
	}
	else
	{
		$query="select *from productdetail";
		
		$result=mysqli_query($connection,$query);
			echo mysqli_error($connection);
			echo "<table align='center' width='500' border='0' cellspacing='5' cellpadding='5' >";
			
			while($r=mysqli_fetch_assoc($result))
			{
				
				$a=$r['image'];
				$i=$r['productid'];
				echo "<tr><td rowspan='6'><img src='product/$a' width='200' height='200'></td><td><b>Product Id:</td><td>".$r['productid']."</td></tr>";
				echo "<tr><td><b>Product Name:</td><td>".$r['productname']."</td></tr>";
				echo "<tr><td><b>Shop Name:</td><td>".$r['shopname']."</td></tr>";
				//echo "<tr><td><b>Ingredients:</td><td>".$r['ingredients']."</td></tr>";
				echo "<tr><td><b>Quantity:</td><td>".$r['quantity']."</td></tr>";
				//echo "<tr><td><b>Benefits:</td><td>".$r['benefits']."</td></tr>";
				echo "<tr><td><b>Price(Rs):</td><td>".$r['price']."</td></tr>";
				echo "<tr><td><a href='Usercart.php?pid=$i'>Add To Cart</a></td><td><a href='Userproductinfo.php?id=$i'>View Detail</a></td></tr>";
				echo "<tr><td colspan='3'><hr></td></tr>";
				//echo "<tr><td><b>Shelf Life:</td><td>".$r['shelflife']."</td></tr>";
					
		

		}
			echo "</table>";
	}



?>


<br>



</td>
</tr>
<tr><td height="30" colspan="4" style="background-color:green;color:white;">

<marquee><p class="pp">Copyright @ 2019 Getting Crowned By Nature</p>

</marquee>
</td></tr>
</table>
</form>
</body>
</html>
