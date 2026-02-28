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

?>

<?php
if(isset($_REQUEST['register']))
{
	$cusname=$_REQUEST['cusname'];
	$contact=$_REQUEST['contact'];
	$address=$_REQUEST['address'];
	$uname=$_REQUEST['uname'];
	
	
	$pass=$_REQUEST['pass'];
	$confirm=$_REQUEST['confirm'];

	
	
	if(!$connection)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="insert into userinfo(cusname,contact,address,email,password,confirm) values('$cusname',$contact,'$address','$uname','$pass','$confirm')";
		$result=mysqli_query($connection,$q);
		echo mysqli_error($connection);
		echo "<script>alert('Registered successfully!!!!')</script>";
	}
}



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


<br><br>
<table cellspacing="10" cellpadding="10" align="center">
<tr><td colspan="2" align="center"><h2>USER REGISTRATION</h2></td></tr>
<tr><td>Customer Name:</td><td><input type="text" name="cusname" id="cusname" required><span id="s4"></span></td></tr>
<tr><td>Contact:</td><td><input type="number" name="contact" id="contact" required><span id="s4"></span></td></tr>
<tr><td>Address:</td><td><textarea name="address" id="address"></textarea></td></tr>

<tr><td>E-mail Id:</td><td><input type="email" name="uname" id="uname" required><span id="s4"></span></td></tr>

<tr><td>Password:</td><td><input type="password" name="pass" id="pass" required><span id="s5"></span></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" name="confirm" id="confirm" required><span id="s6"></span></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="register" id="register" value="Register">
<input type="reset" name="clear" id="clear" value="Reset">
</td>
</tr>
<tr><td colspan="2" align="center"><a href="Userlogin.php">Login Here</a></td></tr>
</table>

</td>
</tr>
<tr><td height="30" colspan="5" style="background-color:green;color:white;">

<marquee><p class="pp">Copyright @ 2019 Getting Crowned By Nature</p>

</marquee>
</form>
</body>
</html>
