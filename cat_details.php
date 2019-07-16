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



<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>All Categories</h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    	<th>Category ID</th>
                	<th>Category Name</th>
                 	
	</tr>	
<?php 
$query = "SELECT * FROM `categories`";

$result=mysqli_query($con,$query);

	while($row = mysqli_fetch_array($result))
{
	echo "<tr>
		<td>".$row['cat_id']." </td>
		<td>".$row['cat_title']." </td>";
   echo"</tr>";
}

?>
</table>
</div>	
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>