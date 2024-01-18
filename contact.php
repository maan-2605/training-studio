<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>

	<div class="main">
    <div class="topnav">
      
      <div class="logo">
        <h2>Training<em> Studio</em></h2>
      </div>
          
          <!-- <a href="sup.php">SIGN UP</a> -->
          <a href="contact.php"class="active" >CONTACT</a>
          <a href="about.php" >ABOUT</a>
          <a href="home.php"  >HOME</a>
      </div>
  </div>


   <div class="container">
  <form action="condata.php" method="post">

    <label >Name</label>
    <input type="text" name="name" placeholder="Your name...">

    <label >Email</label>
    <input type="email" name="email" placeholder="Your email...">

    <label >Subject</label>
    <input type="text" name="subject" placeholder="Subject...">

    <label >Message</label>
    <textarea name="comment" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" >

  </form>
</div> 

</body>
</html>