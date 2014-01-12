
<html>
	<head>
		<title>Crafity</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		</head>
	<body>
		<div id="background">
			<img src="images/background.jpg">
		</div>		
		<div class="header">
				<center><img src="images/MAIN2.png"></center>
		</div>
		<div class="main_content">
			<center><ol class="breadcrumb ">
			  <li class="active"><a href="index.php">Home</a></li>
			  <li><a href="reg.php">Register</a></li>
			  <li><a href="#">Bans</a></li>
			  <li><a href="#">community</a></li>
			</ol></center>
			
			<div class="news">
				<div class="formreg">
				<?php
				error_reporting(0);
				
				//define our offsets and shiet
				$code = $_POST['code']; //5bit reg code
				$username = $_POST['username']; //varchar username(max chars 25)
				$wl_file = "server/white-list.txt"; //define our white list file.
				
				//include our classes
				include('classes/mysql.php');
				
				if($username == NULL && $code == NULL)
				{
					echo "<center><span class='label label-danger'>Error:</span> Please make sure you entered data correctly</center>";
				}
				else
				{
					if(file_exists($wl_file))
					{
						
						mysql_connect("localhost", "root", "root");
						mysql_select_db("crafity");					
						$query = "SELECT * FROM codes WHERE code=$code";
						$result = mysql_query($query);
						
						if(mysql_num_rows($result)) {
							
							while($row = mysql_fetch_array($result))
							{
								if($row['registered'] == "1")
								{
									echo "<center><span class='label label-danger'>Error:</span> <strong>".$code."</strong> has already been regisited</center>";
								}
								else 
								{
									
									$data = ''.$username.''.PHP_EOL;
									$fp = fopen('server/white-list.txt', 'a');
									fwrite($fp, $data);
									echo "<center><span class='label label-success'>Success</span>Congratulations, you have successfull registered under the username <strong>".$username."</strong> Using the code <strong>".$code."</strong>";
									mysql_connect("localhost", "root", "parker");
									mysql_select_db("minecraftrcon");
									$updatequery = "UPDATE codes SET username='$username', registered = '1' WHERE code = '$code'";
									$resultquery = mysql_query($updatequery);
								}
							}
						}
						else
						{
							echo "<center><span class='label label-danger'>Error:</span> The code <strong>".$code."</strong> does not exist</center>";
						}
					}
					else 
					{
						echo "<center><span class='label label-danger'>Error[001]:</span> A crucial file is missing";
					}
				}

				
				
				?>
			</div>
		</div>
	</body>
</html>