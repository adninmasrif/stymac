<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>StyMac</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>

  <div class="col-sm-10 " align="center">	
  <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Send E-Mail </h1></div><br>

	
	
<form action="send_mail.php" name="form" method="post" enctype='multipart/form-data'>
	<label class="input-lg">Enter Reciever's E-mail</label>

<input name="mail_to" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Reciever" autofocus required><br><br>
<hr>
<label class="input-lg" >Enter Subject</label>
<input name="mail_sub" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Subject" autofocus required><br><br>
<hr>
<label class="input-lg" >Enter Message</label>
<textarea name="mail_msg" class="input-lg" id="user_name" style="font-size:18px; width:300px" placeholder="Enter Message" autofocus required> </textarea>
<hr>

<label class="input-lg" >Attchment</label>
<input name="file" class="input-lg" type="file" id="user_name" style="font-size:18px; width:300px"autofocus required><br><br>
<hr>

 <button type="submit" class="btn btn-success" name="submit" id="btn_save" style="font-size:18px">Send Mail</button>
 <br>
 <hr>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>