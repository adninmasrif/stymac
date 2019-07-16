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
    <h1 align="center"><a href="dressshow.php"><img src="stymac.png"></a></h1>
</header>


 <table>
 <tr>

  <th>Designer Name</th> 
  <th>E-Mail</th> 
  <th>Phone Number</th> 
  
 </tr>


<?php
include('db.php');

if (isset($_POST['showdesigners'])) 
{
  
  $query= "SELECT `email`, `username`,`phone` FROM `designerpanel`";
  $designquery = mysqli_query($con, $query);

if ( mysqli_num_rows($designquery) > 0 ) 
{
  echo "<script>alert('Designer Info')</script>";
  if(mysqli_num_rows($designquery) > 0)
  {
    while($row = mysqli_fetch_array($designquery))
    {

        echo "<tr>

          <td>".$row['username']." </td>
          <td>".$row['email']." </td>
          <td>".$row['phone']." </td>

        </tr>"; 
    }
    
  }

}
  else
  {
    echo "<script>alert('Press The Button!!')</script>";


  }
  echo "</table>";
  
}
?>
</table>
</body>
</html>