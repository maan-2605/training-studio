









<!DOCTYPE html>
<html>
<head>
	<title>DWPD WebSite</title>
	<link rel="stylesheet" type="text/css" href="sin.css">
</head>

<body>



	<h2 align="center">Login</h2>
	<form action="login.php" method="post">
		

		<div class="container">
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="email" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit">Login</button>
			<input type="checkbox" checked="checked"> Remember me
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<button type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
		</div>
		 <p>Don't have an account? <a href="sup.php">Sign UP</a>.</p>
	</form>

</body>

</html>
