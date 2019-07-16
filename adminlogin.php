<?php include('designerregister.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="projectcss.css">
	<meta charset="UTF-8">
		<title>StyMac</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="layout/css/bootstrap.min.css">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand" src = "stymac.png">StyMac</a>
			</div>
<div class="container page-header well" align="center">
<img src="stymac.png">
<h1 align="center">Admin Login</h1>

 <form method="post" action="designerregister.php">
	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="adminusername" required="required" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="adminpassword" required="required">
  	</div>
  	<div class="form-group">
<button class="btn btn-large btn-lg btn-success" type="submit" name="adminlogin" id="submit">Log in</button>
</div>
</form>
</body>
</html>