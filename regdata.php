<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="condata.css">
</head>
<body>

<?php
	
	$name =$_POST['name'];
	$email =$_POST['email'];
	$gender =$_POST['gender'];
	$age =$_POST['age'];
	$add = $_POST['addr'];

	$server="localhost";
	$username="root";
	$password="";
	$dbname="gym";


	

	$conn = mysqli_connect($server,$username,$password,$dbname);

 	$sql ="INSERT INTO `members` (`name`, `email`, `gender`, `age`, `address`) VALUES ('$name', '$email','$gender','$age','$add')";

	$query = mysqli_query($conn,$sql);
 if ($query) 
{
echo "";
?>

<div class="title">
<h1>We will inform you<em> Very Soon!!!</em></h1></div>
<div class="button">
<a href="home.php" class="btn">HOME</a></div>

<?php

}
else{
echo "";
?>
<div class="title">
<h1>Something went<em> Wrong!!!</em></h1></div>
<div class="button">
<a href="regform.php" class="btn">TRY AGAIN</a>


<?php
}
?>



</body>
</html>
