<html>
	<head>
		<title>Crafity</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<style>
			BODY{
				margin: 0 auto;
				color: black;
				font-family: Arial;
			}
			.container{
				margin: 0 auto;
				height: 500px;
				width: 500px;
				padding-top:25px;
				text-align: center;
			}
		</style>
		<div class="container">
			<img src="logo.jpg">
			<form action="done.php" method="POST">
				 minecraft username:<br>
				  <input type="text" name="username"><br>
				 Registration code:  <br>
				 <input type="text" name="code"><br>
				 <input type="submit">
				 <p>NOTE: ►Username is your in-game minecraft name, not email address.. make sure this is correct if not you'll not be able to connect.</p>
			 </form>
		</div>
	</body>
</html>