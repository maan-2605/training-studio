<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="regform.css">
</head>
<body>
	<form action="regdata.php" method="post">
		<div class="container">
    <h1>Membership Form</h1>
    <p>Please fill in this form to become a member.</p>
    <hr>

    <label><b>Name:</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required>

    <label><b>Email:</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label><b>Gender:</b></label>
    <input type="radio" name="gender" value="MALE">Male
     <input type="radio" name="gender" value="FEMALE">Female<br><br><br>

    <label><b>Age:</b></label>
    <input type="number" placeholder="Enter Your Age" name="age"required><br><br><br>

    <label><b>Address:</b></label>
    <input type="textarea" placeholder="Enter Your Address" name="addr"required>
    <hr>
    
    <button type="submit" class="btn">Submit</button>
  </div>
  


	</form>



</body>
</html>