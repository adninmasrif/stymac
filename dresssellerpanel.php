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
  <title>StyMac</title>
   <link rel="stylesheet" type="text/css" href="projectcss.css">
  <link rel="stylesheet" type="text/css" href="imageadding.css">
</head>
<body>
   <div class="wrapper">
     
    <div class="header">
              <h2>Dress Seller Panel</h2> 
             <a href="logout.php" style="float: right; color: red;">  Log Out</a>
             <a href="index.php" style="float: left; color: white;">  Home</a>
    </div>
  </div>

<form method="post" action="dressupload.php" >
    <div class="form-group">

           <div class="input-group">
             <label>Dress Seller Name</label>
             <input type="text" name="dressusernamesearch" placeholder="Enter your username" 
             required="required" >
           </div>
            <button  class="btn btn-large btn-lg btn-success" type="submit" name="seedresses" id="submit">SEE Dress Details</button>
      </div>
</form>
<form method="post" action="dressupload.php" enctype="multipart/form-data">

     <div class="input-group">
            <label>Dress Seller UserName</label>
            <input type="text" name="dressusername" placeholder="Enter your username" required="required"  >
    </div>
    <div class="input-group">
       <label>Select Category</label>
       <select name="dresscategory" id="myList">
           <option value="Man">Man</option>
           <option value="Woman">Woman</option>
           <option value="Child">Child</option>
       </select>
    </div>
    <div class="input-group">
            <label>Title</label>
            <input type="text" name="dresstitle" required="required"  >
    </div>
    <div class="input-group">
            <label>Description</label>
            <input type="text" name="dressdescription" required="required">
    </div>
    <div class="input-group">
            <label>Price</label>
            <input type="text" name="dressprice" required="required">
    </div>
      <div class="input-group">
        <label>Negotiable</label>
              <input type="radio" name="dressnegotiable" value="Yes">Yes</input>
              <input type="radio" name="dressnegotiable" value="No">No </input>
      </div>
    <div class="input-group">
            <label>Jpeg Image</label>
            <input type="file" name="dressjpegfile" required="required">
    </div>
    
      <div class="form-group">
            <button class="btn btn-large btn-lg btn-success" type="submit" name="uploaddress">Upload Dress</button>
      </div>
</form>

    




    
</body>
</html>
