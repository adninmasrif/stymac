<?php include('designerregister.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Designer Login</title>
	<link rel="stylesheet" type="text/css" href="projectcss.css">
	<meta charset="UTF-8">
		<title>StyMac</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="clientsitework.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="layout/css/bootstrap.min.css">

		<script type="text/javascript">
        
        function changeColor(obj) {
            if (obj.style.color == 'orange') {
                obj.style.color = 'black';
            } else {
                obj.style.color = 'orange';
            }
        }
         
        function changeBgColor(obj, colorName) {
            obj.style.backgroundColor = colorName;
        }
         
        function changeText(obj, text) {
            obj.innerText = text;
        }
         
        function scaleUp(obj, size) {
            obj.style.fontSize = size;
        }
        function validation()
        {
        	var username = document.getElementById('username').value;
        	var password = document.getElementById('password').value;
        	if (username == '' || password == '') {
        		alert('Inputs can not be empty');
        		return false;
        	}
        	else{
        		return true;
        	}
        }
         
        
    </script>
        
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
				<a href="index.php" class="navbar-brand" src = "stymac.png" onmouseover="changeText(this,'Go to Home!')" onmouseout="changeText(this,'StyMac')" >StyMac</a>
			</div>
<div class="container page-header well" align="center">
<img src="stymac.png">
<h1 align="center" onmouseover="scaleUp(this,'30px')" onmouseout="scaleUp(this,'20px')" >Designer Login</h1>

 <form method="post" action="designerregister.php" onsubmit="return validation();">
	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" id="username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" id="password">
  	</div>
  	<div class="form-group">
<button class="btn btn-large btn-lg btn-success" onmouseover="scaleUp(this,'60px')" onmouseout="scaleUp(this,'20px')" type="submit" name="login_user" id="submit">Log in</button>
</div>
  	<p>
  		Not yet a member? <a href="designerregistration.php">Sign up</a>
  	</p>

</form>
</body>
</html>