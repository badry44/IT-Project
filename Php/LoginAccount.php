<?php
include('../Functions.php');
$UserName = $_POST['UserName'];
$password = $_POST['password'];
$query = "select * from users where UserName = '$UserName' and password= '$password'";
$Result = "nono";
$arr = QueryThis($query);
if (empty($arr))
{
	$Result = "<div><h1><center>Create Account</center></h1></div>
	<div><h1 style = 'color : red;'><center> UserName Or Password is wrong  </center></h1></div>
	<center>
	<form method='Post' action='../Php/LoginAccount.php' name='CreateAccountForm'>
		<h4 style=''>User Name</h4><input type='text' name='UserName'>
		<h4>Password</h4><input type='password' name='password'><br><br>
		<input type='button' name='Create' value='Login' onclick='FormValdition();''>
	</form>
	</center>";
}
else
{
	;
	$Result="<div><h1 style = 'color : red;'><center>Login Done Successfully</center></h1></div>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<title> Create Accout</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href="../css/style.css" type="text/css" />
	<script type="text/javascript">	
	function FormValdition()
	{
		if (document.CreateAccountForm.UserName.value=="")
		{

			alert("UserName Can't Be Empty");
			return false;
		}
		if (document.CreateAccountForm.password.value=="")
		{
			alert("Password Can't Be Empty");
			return false;
		}
		document.forms['CreateAccountForm'].submit();
		return true;
		
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
	<?php echo $Result;?>
	</div>
</div>
</body>
</html>