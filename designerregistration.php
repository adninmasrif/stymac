<?php include('designerregister.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Designer Registration</title>\
	<link rel="stylesheet" type="text/css" href="projectcss.css">

</head>
<body>
	<div class="header">
		<h2> Designer Registration</h2>
 	</div>

<form method="post" action="designerregister.php">
   <?php include('errors.php'); ?>
   <div class="input-group">
  	  <label>First Name</label>  
  	  <input type="text" name="firstname" placeholder="Enter Your First Name" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Last Name</label>  
  	  <input type="text" name="lastname" placeholder="Enter Your Last Name" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter Your Email" required="required">
  	</div>

  	<div class="input-group">
  	  <label>Username</label>  
  	  <input type="text" name="username" placeholder="Enter Your Username" required="required">
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Enter Your Password" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Enter Password Again" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phone" placeholder="Enter Your phone" required="required">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register">Register</button>
  	</div>
  	<p align="center">
  		Already Registered? <a href="designerlogin.php">Sign in</a>
  	</p>
  </form>

</body>
</html>