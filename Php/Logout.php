<?php
session_start();

$Result = "<div><h1 style = 'color : red;'><center>Logout Done sucessfully you will be redirect to Home Page</center></h1></div>";
session_unset(); 
session_destroy(); 
header( "refresh:3;url=../index.php" );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<title> Logout</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href="../css/style.css" type="text/css" />
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