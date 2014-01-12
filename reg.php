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
					<form action="done.php" method="POST">
						<input type="text" name="username" placeholder="minecraft username"><br>
						<input type="text" name="code" placeholder="Code you was provided with"><br>
						<input type="text" name="email" placeholder="email address(optional)"><br>
						<input type="submit">
					</form>
			</div>
		</div>
	</body>
</html>