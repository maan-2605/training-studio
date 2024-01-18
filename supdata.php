
<!DOCTYPE html>
<html>
<head>
	<title>DWPD WebSite</title>
	<link rel="stylesheet" type="text/css" href="condata.css">
</head>
<body>


<?php
	

	$server="localhost";
	$username="root";
	$password="";
	$dbname="gym";



	$email =$_POST['email'];
	$pass =$_POST['pass'];
	$cpass =$_POST['cpass'];

	

	$conn = mysqli_connect($server,$username,$password,$dbname);

 	if ($pass==$cpass) {
 		
 	$sql ="INSERT INTO `loginform` ( `email`, `password`) VALUES ( '$email','$pass')";

	$query = mysqli_query($conn,$sql);

 	if ($query) 
	{
		echo "";
		?>
	
		<div class="title">
		<h1>Account Created <em> Successfully!!!</em></h1></div>
		<div class="button">
		<a href="sin.php" class="btn">LOGIN</a></div>
	
<?php
	}
	else
	{
		echo "";
		?>
		<div class="title">
<h1>Something went<em> Wrong!!!</em></h1></div>
<div class="button">
<a href="sup.php" class="btn">TRY AGAIN</a>

<?php
	}
	
}
?>
</body>
</html>