<?php

include("db.php");

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
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>All Uploaded Dress Details </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    	<th>User Name</th>
			    	<th>Category</th>
                	<th>Title</th>
                 	<th>Description</th>
                  	<th>Price</th>
                  	<th>Negotiable</th>
                  	<th>Image Source</th>
                   	
	</tr>	
<?php 
$query = "SELECT * FROM `dressinfo`";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
{
	echo "<tr>
		<td>".$row['username']." </td>
		<td>".$row['category']." </td>
		<td>".$row['title']." </td>
		<td>".$row['description']."</td>
		<td>".$row['price']."</td>
		<td>".$row['negotiable']."</td>
		<td><a  href='$row[image]'><img src='".$row['image']."' height = '50' width ='50'/> </a> </td> ";
		
		

   echo"</tr>";
}

}

?>
</table>
</div>	
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>