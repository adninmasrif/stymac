<!DOCTYPE html>
<html>
<head>
 <title>StyMac</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
 <link rel="stylesheet" type="text/css" href="imageadding.css">

</head>


<body>
	<div class="wrapper">
 <header>
    <h1 align="center"><a href="index.php"><img src="stymac.png"></a></h1>
</header>

<table>
 <tr>

  <th>Dress Seller Name</th> 
   <th>Category</th> 
	<th>Title</th> 
   <th>Description</th> 
    <th>Price</th> 
   <th> Negotiable</th>
  <th colspan="2">Image</th>
 </tr>





<?php
include('db.php');

if (isset($_POST['uploaddress'])) {

	$dressusername = $_POST['dressusername'];
	$dresscategory = $_POST['dresscategory'];
	$dresstitle = $_POST['dresstitle'];
	$dressdescription = $_POST['dressdescription'];
	$dressprice = $_POST['dressprice'];
	$dressnegotiable = $_POST['dressnegotiable'];

	$jpegfilefilename = $_FILES["dressjpegfile"]["name"];
	$tempjpegfilefilename = $_FILES["dressjpegfile"]["tmp_name"];
	$dressfolder = "dress_image/".$jpegfilefilename;
	move_uploaded_file($tempjpegfilefilename,$dressfolder );
    
    	$inserdesigninfo = "INSERT INTO `dressinfo`(`id`, `username`, `category`, `title`, `description`, `price`, `negotiable`, `image`) VALUES (NULL,'$dressusername','$dresscategory','$dresstitle', '$dressdescription','$dressprice','$dressnegotiable','$dressfolder')";

	mysqli_query($con,$inserdesigninfo);
	header('location:dresssellerpanel.php');
	echo "<script>alert('Design Uploaded')</script>";
}


if (isset($_POST['seedresses'])) 
{
	

	$dressusernamesearch = $_POST['dressusernamesearch'];
	$query= "SELECT * FROM `dressinfo` WHERE username = '$dressusernamesearch' ";
	$designquery = mysqli_query($con, $query);

if ( mysqli_num_rows($designquery) > 0 ) 
{
	echo "<script>alert('Here are Your dresses')</script>";
	if(mysqli_num_rows($designquery) > 0)
	{
		while($row = mysqli_fetch_array($designquery))
		{

		    echo "<tr>

		    		<td>".$row['username']." </td>
		    		<td>".$row['category']." </td>
					<td>".$row['title']." </td>
					<td>".$row['description']." </td>
					<td>".$row['price']." </td>
					<td>".$row['negotiable']." </td>
					<td><a  href='$row[image]'><img src='".$row['image']."' height = '200' width ='200'/> </a> </td> 

				</tr>";	
		}
		
	}

}
  else
  {
  	echo "<script>alert('You didn't submit any dresses!!')</script>";


  }
  echo "</table>";
	
}
?>
</table>
</body>
</html>
