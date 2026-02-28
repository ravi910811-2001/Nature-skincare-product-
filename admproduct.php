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
<body onLoad="demo();" style="background-image:url(pic/b3.jpg);background-size:100% 100%;"><?php
include("config.php");


if(isset($_REQUEST["submit"]))
{
	
	
	
	$pname=$_REQUEST['pname'];
	$sname=$_REQUEST['sname'];
	$ingredients=$_REQUEST['ingredients'];
	$quantity=$_REQUEST['quantity'];
	$benefits=$_REQUEST['benefits'];
	$price=$_REQUEST['price'];
	$shelflife=$_REQUEST['shelflife'];
	
	
	$pimage=$_FILES['pimage']['name'];
	$t=$_FILES['pimage']['tmp_name'];
	move_uploaded_file($t,"product/".$pimage);
	
	if(!$connection)
	{
		echo "connection error ".mysqli_connect_error();
	}
	else
	{
		$query="insert into productdetail(productname,shopname,ingredients,quantity,benefits,price,shelflife,image) values('$pname','$sname','$ingredients','$quantity','$benefits',$price,'$shelflife','$pimage')";
		
		$res=mysqli_query($connection,$query);
		echo mysqli_error($connection);
		
		
		
		echo "<script>alert('Product Information inserted successfully;')</script>";
	}

	
}
?>
<form name="f" method="post" action="" enctype="multipart/form-data">



<table align="center" border="0" cellspacing="0" cellpadding="0" background="pic/t4.jpg">
<tr height="150">
<td colspan="3">
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
<a href="admshop.php" class="aa">Shops</a>
</td>

<td class="bb">
<a href="admproduct.php" class="aa">Product</a>
</td>



<td class="bb">
<a href="Home.php"class="aa">Logout</a>
</td>


</tr>

</td>
</tr>
<tr>
<td colspan="3">


<table align="center" style="color:black;" cellspacing="10" cellpadding="10">
<tr><td colspan="2" align="center">Product Information

</td></tr>

<tr><td>Product Name:</td><td><input type="text" name="pname" id="pname"></td></tr>
<tr><td>Shop Name:</td><td><input type="text" name="sname" id="sname"></td></tr>
<tr><td>Ingredients:</td><td><input type="text" name="ingredients" id="ingredients"></td></tr>
<tr><td>Quantity:</td><td><input type="text" name="quantity" id="quantity"></td></tr>
<tr><td>Benefits:</td><td><textarea name="benefits" id="benefits"></textarea></td></tr>
<tr><td>Price:</td><td><input type="text" name="price" id="price"></td></tr>
<tr><td>Shelf Life:</td><td><input type="text" name="shelflife" id="shelflife"></td></tr>

<tr><td>Product Image:</td><td><input type="file" name="pimage" id="pimage"></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit">
<input type="reset" name="clear" id="clear" value="clear">
</td></tr>


</table>


</td>
</tr>
<tr><td height="30" colspan="3" style="background-color:green;color:white;">

<marquee><p class="pp">Copyright @ 2019 Getting Crowned By Nature</p>

</marquee>
</form>
</body>
</html>
