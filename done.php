<?php
error_reporting(0);
if($_POST['username'] && $_POST['code'] == null)
{
	echo "Please make sure you entered data correctly";
}
else 
{
	$code = $_POST['code'];
	$username = $_POST['username'];
	mysql_connect("localhost", "root", "parker");
	mysql_select_db("minecraftrcon");
	$query = "SELECT * FROM codes WHERE code=$code";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result)) {
		
		while($row = mysql_fetch_array($result))
		{
			if($row['registered'] == "1")
			{https://www.facebook.com/#
				echo "<strong>".$code."</strong> has already been regisited";
			}
			else 
			{

				$data = ''.$username.''.PHP_EOL;
				$fp = fopen('server/white-list.txt', 'a');
				fwrite($fp, $data);
				echo "<center>Congratulations, you have successfull registered under the username <strong>".$username."</strong> Using the code <strong>".$code."</strong>";
				mysql_connect("localhost", "root", "parker");
				mysql_select_db("minecraftrcon");
				$updatequery = "UPDATE codes SET username='$username', registered = '1' WHERE code = '$code'";
				$resultquery = mysql_query($updatequery);
			}
		}
	}
	else
	{
		echo "The code <strong>".$code."</strong> does not exist";
	}
}

?>