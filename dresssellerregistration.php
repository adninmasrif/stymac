<?php include('designerregister.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dress Seller Registration</title>\
	<link rel="stylesheet" type="text/css" href="projectcss.css">

</head>
<body>
	<div class="header">
		<h2> Dress Seller Registration</h2>
 	</div>

<form method="post" action="designerregister.php">
   <?php include('errors.php'); ?>
   <div class="input-group">
  	  <label>First Name</label>  
  	  <input type="text" name="dressfirstname" placeholder="Enter Your First Name" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Last Name</label>  
  	  <input type="text" name="dresslastname" placeholder="Enter Your Last Name" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="dressemail" placeholder="Enter Your Email" required="required">
  	</div>

  	<div class="input-group">
  	  <label>Username</label>  
  	  <input type="text" name="dressusername" placeholder="Enter Your Username" required="required">
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="dresspassword_1" placeholder="Enter Your Password" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="dresspassword_2" placeholder="Enter Password Again" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="dressphone" placeholder="Enter Your phone" required="required">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="dressregister">Register</button>
  	</div>
  	<p align="center">
  		Already Registered? <a href="dresssellerlogin.php">Sign in</a>
  	</p>
  </form>

</body>
</html>