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
	$subject =$_POST['subject'];
	$comment =$_POST['comment'];

	$server="localhost";
	$username="root";
	$password="";
	$dbname="gym";


	

	$conn = mysqli_connect($server,$username,$password,$dbname);

 	$sql ="INSERT INTO `comments` (`name`, `email`, `subject`, `comment`) VALUES ('$name', '$email','$subject','$comment')";

	$query = mysqli_query($conn,$sql);
 if ($query) 
{
echo "";
?>
<div class="title">
<h1>Thanks For Your <em> Response!!!</em></h1></div>
<div class="button">
<a href="contact.php" class="btn">SEND ANOTHER</a>
<a href="home.php" class="btn">HOME</a></div>

<?php

}
else{
echo "";
?>
<div class="title">
<h1>Something went<em> Wrong!!!</em></h1></div>
<div class="button">
<a href="contact.php" class="btn">TRY AGAIN</a>


<?php
}
?>



</body>
</html>
