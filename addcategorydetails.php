<?php

include("db.php");

if(isset($_POST['btn_save']))
{
$cat_title=$_POST['user_name'];

$catinsert = "INSERT INTO `categories`(`cat_id`, `cat_title`) VALUES (NULL,'$cat_title')";
mysqli_query($con,$catinsert);
echo "<script>alert('Category Added'); </script";
header("location: adminpanel.php"); 

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
<?php include("include/header.php"); ?>

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>

  <div class="col-sm-10 " align="center">	
  <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Add Category Details </h1></div><br>
	
<form action="addcategorydetails.php" name="form" method="post">
<input name="user_name" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Category Name" autofocus required><br><br>
<hr>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Add Category Name</button>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>