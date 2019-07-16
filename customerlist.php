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
	<h1>All Customers List </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    	<th>User ID</th>
                	<th>First Name</th>
                 	<th>Last Name</th>
                  	<th>Email</th>
                  	<th>Password<a href="https://www.md5online.org/md5-decrypt.html">( Decrypt )</a></th>
                   	<th>Mobile</th>
                   	<th>Address1</th>
                   	<th>Address2</th>
	</tr>	
<?php 
$query = "SELECT * FROM `user_info`";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
{
	echo "<tr>
		<td>".$row['user_id']." </td>
		<td>".$row['first_name']." </td>
		<td>".$row['last_name']."</td>
		<td>".$row['email']."</td>
		<td>".$row['password']."</td>
		<td>".$row['mobile']."</td>
		<td>".$row['address1']."</td>
		<td>".$row['address2']."</td>";

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