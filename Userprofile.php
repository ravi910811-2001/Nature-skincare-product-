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

}3
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

if(!$connection)
{
		echo "the connection error is ".mysqli_connect_error();
		
}
else
{
	$id=$_SESSION['userid'];
		$q="select *from userinfo  where uid=$id";
		$result=mysqli_query($connection,$q);
		echo mysqli_error($connection);
		while($r=mysqli_fetch_assoc($result))
		{
			$vna=$r['cusname'];
			$vcontact=$r['contact'];
			$vaddres=$r['address'];
			$vemail=$r['email'];
			$vpass=$r['password'];
			$vconfirm=$r['confirm'];
			
		}
}
if(isset($_REQUEST['update']))
{
	$cusname=$_REQUEST['cusname'];
	$contact=$_REQUEST['contact'];
	$address=$_REQUEST['address'];
	$uname=$_REQUEST['uname'];
	
	
	$pass=$_REQUEST['pass'];
	$confirm=$_REQUEST['confirm'];

	
	$id=$_SESSION['userid'];
	if(!$connection)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="update userinfo set cusname='$cusname',contact=$contact,address='$address',email='$uname',password='$pass',confirm='$confirm' where uid=$id";
		$result=mysqli_query($connection,$q);
		echo mysqli_error($connection);
		echo "<script>alert('Profile Updated successfully!!!!')</script>";
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




<table  align="center" cellspacing="10" cellpadding="10" border="0">
<tr><td colspan="2" align="center"><h2>MY PROFILE</h2></td></tr>
<tr><td>Customer Name:</td><td><input type="text" name="cusname" id="cusname" value="<?php if(isset($vna)){echo $vna;}?>" required><span id="s4"></span></td></tr>
<tr><td>Contact:</td><td><input type="number" name="contact" id="contact" value="<?php if(isset($vcontact)){echo $vcontact;}?>" required><span id="s4"></span></td></tr>
<tr><td>Address:</td><td><textarea name="address" id="address"><?php if(isset($vaddres)){echo $vaddres;}?></textarea></td></tr>

<tr><td>E-mail Id:</td><td><input type="email" name="uname" id="uname" value="<?php if(isset($vemail)){echo $vemail;}?>" required><span id="s4"></span></td></tr>

<tr><td>Password:</td><td><input type="password" name="pass" id="pass" value="<?php if(isset($vpass)){echo $vpass;}?>" required><span id="s5"></span></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" name="confirm" value="<?php if(isset($vconfirm)){echo $vconfirm;}?>" id="confirm" required><span id="s6"></span></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="update" id="update" value="Update">
<input type="reset" name="clear" id="clear" value="Reset">
</td>
</tr>

</table>
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
