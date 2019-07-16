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
<html>
<head>
  
  <meta charset="UTF-8">
    <title>StyMac</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script src="js/imageadding.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="projectcss.css">
    <link rel="stylesheet" type="text/css" href="imageadding.css">

</head>
<body>
  
    <div class="wrapper">
     
    <div class="header">
              <h2>Uploading Design</h2>
               <a href="logout.php" style="float: right; color: red;">  Log Out</a>
              <a href="index.php" style="float: left; color: white;">  Home</a>
    </div>
<form method="post" action="upload.php" >
    <div class="form-group">

           <div class="input-group">
             <label>Designer Name</label>
             <input type="text" name="dnamesearch" placeholder="Enter your username" 
             required="required" >
           </div>
            <button  class="btn btn-large btn-lg btn-success" type="submit" name="seedesigns" id="submit">SEE Designs</button>
      </div>
</form>
<form method="post" action="upload.php" enctype="multipart/form-data">

     <div class="input-group">
            <label>Designer Name</label>
            <input type="text" name="dname" placeholder="Enter your username" required="required"  >
    </div>
    <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" required="required"  >
    </div>
    <div class="input-group">
            <label>Description</label>
            <input type="text" name="description" required="required">
    </div>
    <div class="input-group">
            <label>Price</label>
            <input type="text" name="price" required="required">
    </div>
    <div class="input-group">
            <label>Jpeg Image</label>
            <input type="file" name="jpegfile" required="required">
    </div>
    <div class="input-group">
            <label>Adobe Illustrator File</label>
            <input type="file" name="aifile" required="required">
    </div>
      <div class="form-group">
            <button class="btn btn-large btn-lg btn-success" type="submit" name="uploadimage">Upload Image</button>
      </div>
</form>




    




    
</body>
</html>
