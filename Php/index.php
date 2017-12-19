<?php
include('Functions.php');
$query="select * from users";
$s = QueryThis($query);
if (is_array($s))
{
foreach ($s as $var ) {
    echo $var['id']."  ".$var['UserName']."  ".$var['password']."  ".$var['email']."<br>";
	}
}
//INSERT INTO Users ('UserName', 'password', 'email') VALUES ('UserName','Password','Email')










?>