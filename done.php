<?php
error_reporting(0);
if($_POST['username'] && $_POST['code'] == null)
{
	echo "Please make sure you entered data correctly";
}
else 
{
	$code = $_POST['code'];
	mysql_connect("localhost", "root", "parker");
	mysql_select_db("minecraftrcon");
	$query = "SELECT * FROM codes WHERE code=$code";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result)) {
		echo "The code you have registered under has been used, sorry :(";
	}
	else
	{
		echo "0";
	}
}

?>