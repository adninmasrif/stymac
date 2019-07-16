<?php

include("db.php");

if(isset($_POST['addproduct']))
{
$catid =$_POST['catid'];
$brandid =$_POST['brandid'];
$producttitle =$_POST['producttitle'];
$productprice =$_POST['productprice'];
$productdesc =$_POST['productdesc'];


	$jpegfilefilename = $_FILES["productpic"]["name"];
	$tempjpegfilefilename = $_FILES["productpic"]["tmp_name"];
	$folder = "product_images/".$jpegfilefilename;
	move_uploaded_file($tempjpegfilefilename,$folder ); 

$productkeywords = $_POST['productkeywords'];


$productinsert = "INSERT INTO `products`(`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES (NULL,'$catid',
'$brandid','$producttitle','$productprice','$productdesc','$jpegfilefilename','$productkeywords')";

mysqli_query($con,$productinsert);
echo "Product inserted"; 

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
	<h1>Add Product Details </h1></div><br>
	
<form action="addproductdetails.php" name="form" method="post" enctype="multipart/form-data">
<input name="catid" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Product Category ID" autofocus required><br><br>
<hr>
<input name="brandid" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Product Brand ID" autofocus required><br><br>
<hr>
<input name="producttitle" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Product Title" autofocus required><br><br>
<hr>
<input name="productprice" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Product Price" autofocus required><br><br>
<hr>
<input name="productdesc" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Product Description" autofocus required><br><br>
<hr>
<h4>Enter Product Image</h4>

<input name="productpic" class="input-lg" type="file"  id="user_name" style="font-size:18px; width:300px" autofocus required><br><br>
<hr>
<input name="productkeywords" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:300px" placeholder="Enter Product Keyword" autofocus required><br><br>
<hr>
 <button type="submit" class="btn btn-success" name="addproduct" id="btn_save" style="font-size:18px">Include Product</button> <hr>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>