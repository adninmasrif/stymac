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

  <th>Designer Name</th> 
  <th>Title</th> 
  <th>Description</th> 
  <th>Price</th>
  <th colspan="2">Image</th>
 </tr>


<?php
include('db.php');

if (isset($_POST['uploadimage'])) {

	$dname = $_POST['dname'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$price = $_POST['price'];

	$jpegfilefilename = $_FILES["jpegfile"]["name"];
	$tempjpegfilefilename = $_FILES["jpegfile"]["tmp_name"];
	$folder = "design_image/".$jpegfilefilename;
	move_uploaded_file($tempjpegfilefilename,$folder );


	$aifilefilename = $_FILES["aifile"]["name"];
	$tempaifilefilename = $_FILES["aifile"]["tmp_name"];
	$aifolder = "design_image/".$aifilefilename;
	move_uploaded_file($tempaifilefilename,$aifolder);

	
	
	$insertimageinfo = "INSERT INTO `designinfo`(`id`, `username`, `title`, `description`, `price`, `picsource_original`, `picsource_ai`) VALUES (NULL,'$dname','$title','$description','$price','$folder ','$aifolder')";

	mysqli_query($con,$insertimageinfo);
	header('location:designerpanel.php');
	echo "<script>alert('Design Uploaded')</script>";

}

if (isset($_POST['seedesigns'])) 
{
	

	$dnamesearch = $_POST['dnamesearch'];
	$query= "SELECT * FROM `designinfo` WHERE username = '$dnamesearch' ";
	$designquery = mysqli_query($con, $query);

if ( mysqli_num_rows($designquery) > 0 ) 
{
	echo "<script>alert('Here are Your designs')</script>";
	if(mysqli_num_rows($designquery) > 0)
	{
		while($row = mysqli_fetch_array($designquery))
		{

		    echo "<tr>

		    		<td>".$row['username']." </td>
					<td>".$row['title']." </td>
					<td>".$row['description']." </td>
					<td>".$row['price']." </td>
					<td><a  href='$row[picsource_original]'><img src='".$row['picsource_original']."' height = '200' width ='200'/> </a> </td> 

				</tr>";	
		}
		
	}

}
  else
  {
  	echo "<script>alert('You didn't submit any design!!')</script>";


  }
  echo "</table>";
	
}
?>
</table>
</body>
</html>