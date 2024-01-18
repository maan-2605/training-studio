<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="condata.css">
</head>
<body>



<?php


$email = $_POST['email'];
$password =$_POST['password'];

$con = new mysqli("localhost","root","","gym");

$stmt = $con->prepare("SELECT * FROM loginform WHERE email = ?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_r = $stmt->get_result();
if ($stmt_r->num_rows > 0) {
	$data = $stmt_r->fetch_assoc();
	if ($data['password']=== $password) {
		header("Location:home.php");
	}
	else{?>
		<div class="title">
			<h1>Invaid Username or<em> Password!!!</em></h1></div>
			<div class="button">
			<a href="sin.php" class="btn">TRY AGAIN</a>
<?php	}
}


else{
?>

	<div class="title">
<h1>Invaid Username or<em> Password!!!</em></h1></div>
<div class="button">
<a href="sin.php" class="btn">TRY AGAIN</a>

<?php
}


?>




</body>
</html>