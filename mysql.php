<?php 
  
	$con = mysql_connect("localhost","xdata_account","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
		mysql_select_db("xdata", $con);
	mysql_query("set names 'utf8' ");
?>
