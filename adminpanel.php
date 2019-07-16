<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
 
     <?php include("include/header.php");?>
    <div class="container-fluid main-container">
  <?php include("include/side_bar.php");?>
    
  <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel panel-default">
  <div class="panel-heading" style="background-color:#c4e17f">
  <h1>Welcome  </h1></div><br>


  <!-- Ajax Reloading Pages -->
  <div class="panel-body" id="getbrand">
    <h2 style="color: red">Brand Details!!</h2>

    <script type="text/javascript">
      function dis(){
        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","brand_cat.php",false);
        xmlhttp.send(null);
        document.getElementById("getbrand").innerHTML = xmlhttp.responseText;
      }

      setInterval(function(){
        dis();
      },2000);
    </script>
  </div>

  <div class="panel-body" id="getcategory">
    <h2 style="color: red">All Categories!!</h2>

    <script type="text/javascript">
      function cat(){
        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","cat_details.php",false);
        xmlhttp.send(null);
        document.getElementById("getcategory").innerHTML = xmlhttp.responseText;
      }

      setInterval(function(){
        cat();
      },2000);
    </script>
  </div>

  


</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>