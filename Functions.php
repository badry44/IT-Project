<?php

function ConnectDb()
{
	$connection = @mysql_connect('localhost','hassan','123456');
	if (!$connection)
		{
		return false;
		}
	$trythisone=mysql_select_db('cluster',$connection);
	if (!$trythisone)
		{
		return false; 
		}
		return $connection;
}

function QueryThis($query)
{
		$con=ConnectDb();
		$res=mysql_query($query);
	if (!strstr($query,"select"))
	{
		mysql_close($con);
		return true;
	}
	else
	{
		$myNewArray=[];
		if (!empty($res))
		{
	for ($i=0;$rows=mysql_fetch_array($res);$i++)
	{
		$myNewArray[$i]=$rows;
	}
		}
		mysql_close($con);
	return $myNewArray;
}

}

?>