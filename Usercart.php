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
<?php
if(isset($_REQUEST['pid']))
{
$id=$_REQUEST['pid'];


if(!$connection)
{
		echo "the connection error is ".mysqli_connect_error();
		
}
else
{
	
		$q="select *from productdetail where productid=$id";
		$result=mysqli_query($connection,$q);
		echo mysqli_error($connection);
		while($r=mysqli_fetch_assoc($result))
		{
			$vpname=$r['productname'];
			$vsname=$r['shopname'];
			$vingredients=$r['ingredients'];
			$vquantity=$r['quantity'];
			$vprice=$r['price'];
			$vshelflife=$r['shelflife'];
			$vimage=$r['image'];
			
			
		}
}

}
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
<a href="Home.php" class="aa">My Profile</a>
</td>

<td class="bb">
<a href="Usershopping.php" class="aa">Shopping</a>
</td>

<td class="bb">
<a href="Userordernfo.php"class="aa">Orders</a>
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
<h1 style="color:maroon;"><p align="center">Your Product Detail </h1></p>
<table align="center" cellspacing="10" cellpadding="10">
<tr><td rowspan="8"><img width="350" height="350" src="product/<?php echo $vimage;?>" /></td><td>Product Name: </td><td><?php echo $vpname;?></td></tr>
<tr><td>Shop Name: </td><td><?php echo $vsname;?></td></tr>
<tr><td>Ingredients: </td><td><?php echo $vingredients;?></td></tr>
<tr><td>Quantity: </td><td><?php echo $vquantity;?></td></tr>
<tr><td>Price: </td><td>Rs.<?php echo $vprice;?></td></tr>
<tr><td>Shelf Life: </td><td>Rs.<?php echo $vshelflife;?></td></tr>

<tr><td>Needed Quantity: </td><td><input type="text" name="quantity" id="quantity" /></td></tr>
<tr><td><input type="submit" name="shop" id="shop" value="Back To Shop" /></td><td>
<input type="submit" id="b1" name="b1" value="Proceed" /></a></tr>
</table>

</td>
</tr>
<tr><td height="30" colspan="4" style="background-color:green;color:white;">

<marquee><p class="pp">Copyright @ 2019 Getting Crowned By Nature</p>

</marquee>
</td></tr>
</table>

<?php
if(isset($_REQUEST['shop']))
{

	$cid=$_SESSION['userid'];
	$da=date("y/m/d/");
	$qn=$_REQUEST['quantity'];
	$amt=$vprice*$qn;
	$na=$_SESSION['user'];
	if(!$connection)
	{
		echo "the connection error is ".mysqli_connect_error();
		
	}
	else
	{
		$q="insert into shopping values($id,'$vpname','$vsname',$vprice,$qn,$amt,$cid,'$da','$na')";
		$result=mysqli_query($connection,$q);
		echo mysqli_error($connection);
		header("location:Usershopping.php");
	}
}

?>

<?php
if(isset($_REQUEST['b1']))
{

	$cid=$_SESSION['userid'];
	$da=date("y/m/d/");
	$qn=$_REQUEST['quantity'];
	$amt=$vprice*$qn;
	$na=$_SESSION['user'];
	if(!$connection)
	{
		echo "the connection error is ".mysqli_connect_error();
		
	}
	else
	{
		$q="insert into shopping values($id,'$vpname','$vsname',$vprice,$qn,$amt,$cid,'$da','$na')";
		$result=mysqli_query($connection,$q);
		echo mysqli_error($connection);
		header("location:Userproceed.php");
	}
}

?>

</form>
</body>
</html>
