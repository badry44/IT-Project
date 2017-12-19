<?php
include('../Functions.php');
$UserN=$_POST['UserName'];
$pass=$_POST['password'];
$em=$_POST['Email'];
$age = $_POST['age'];
$Ruselt="";
echo "$UserN $pass $em";
$query = "select * from users where UserName = '$UserN'";
$FirstArr=QueryThis($query);
$query = "select * from users where email = '$em'";
$ThirdArr=QueryThis($query);
if (empty($FirstArr)&&empty($ThirdArr))
{
	$query1 = "insert into users (UserName,password,email,Age) values ('$UserN','$pass','$em','$age')";
	$n  = QueryThis($query1);

	$Ruselt="The Accout has been created successfully";
}
else
{
	 
	
	$Ruselt="UserName or email is Exist click Go Back To Back To create account<br> <a href=\"javascript:Back()\">GO BACK</a>";

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<title> Create Accout</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href="../css/style.css" type="text/css" />
		<script type="text/javascript">
		function Back() {
			javascript:history.go(-1);
		}
	</script>
</head>
<body>
<div id="bodyWrap">
	<div class="pageWrapper">
		<div id="header">
			<div id="logo">
				<h1>Logo &trade;</h1>
			</div>
			<div id="heading">
				<div class="head"></div>
				<div class="top">
					<a href="http://localhost/ITProject">Home</a>
					<a href="#">New Items</a>
					<a href="#">Special Offers</a>
				</div>
				<div class="sub">
					<a href="#">My Account</a>
					<a href="#">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<div class="pageWrapper" id="main">
	<div><h1 style="color: red;"><center><?php echo"$Ruselt";?></center></h1></div>
	<center>
	</center>
	</div>
</div>
</body>
</html>
