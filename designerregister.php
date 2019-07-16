<?php
session_start();
include "db.php";

$username = "";
$email    = "";
$errors = array(); 


if (isset($_POST['register'])) {
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
  	$username = mysqli_real_escape_string($con, $_POST['username']);
  	$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  	$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
  	$phone =  $_POST['phone'];
  if ($password_1 != $password_2) 
{
	array_push($errors, "The two passwords do not match");
}

$user_check_query = "SELECT * FROM designerpanel WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  {
    // if user exists
    if ($user['username'] === $username) 
    {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) 
    {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) 
  {
  	$password = md5($password_1); //encryption

  	$query = "INSERT INTO `designerpanel`(`firstname`, `lastname`, `email`, `username`, `password`, `phone`) VALUES ('$firstname','$lastname','$email','$username','$password','$phone')";

  	mysqli_query($con, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are Registered";
  	array_push($errors, "Now Log in with the Username and Password");
  	header('location: designerlogin.php');
  }
}



// LOGIN USER
if (isset($_POST['login_user'])) 
{

  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

    $password = md5($password);
  	$query = "SELECT * FROM designerpanel WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) 
  	{
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Login Success";
  	  header('location:designerpanel.php');
    }
    else
    {
    	echo "<script>alert('Wrong Information')</script>";
    	 header('location:designerlogin.php');
    }
} 


if (isset($_POST['dressregister'])) {
	$dressfirstname = mysqli_real_escape_string($con, $_POST['dressfirstname']);
	$dresslastname = mysqli_real_escape_string($con, $_POST['dresslastname']);
	$dressemail = mysqli_real_escape_string($con, $_POST['dressemail']);
  	$dressusername = mysqli_real_escape_string($con, $_POST['dressusername']);
  	$dresspassword_1 = mysqli_real_escape_string($con, $_POST['dresspassword_1']);
  	$dresspassword_2 = mysqli_real_escape_string($con, $_POST['dresspassword_2']);
  	$dressphone =  $_POST['dressphone'];
  if ($dresspassword_1 != $dresspassword_2) 
{
	array_push($errors, "The two passwords do not match");
}

$user_check_query = "SELECT * FROM dresssellerpanel WHERE username='$dressusername' OR email='$dressemail' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  {
    // if user exists
    if ($user['username'] === $dressusername) 
    {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $dressemail) 
    {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) 
  {
  	$dresspassword = md5($dresspassword_1); //encryption

  	$query = "INSERT INTO `dresssellerpanel`(`firstname`, `lastname`, `email`, `username`, `password`, `phone`) VALUES ('$dressfirstname','$dresslastname','$dressemail','$dressusername','$dresspassword','$dressphone')";


  	mysqli_query($con, $query);
  	$_SESSION['username'] = $dressusername;
  	$_SESSION['success'] = "You are Registered";
  	array_push($errors, "Now Log in with the Username and Password");
  	header('location: dresssellerlogin.php');
  }
}


if (isset($_POST['dresslogin'])) 
{

  $dressusername = mysqli_real_escape_string($con, $_POST['dressusername']);
  $dresspassword = mysqli_real_escape_string($con, $_POST['dresspassword']);

    $dresspassword = md5($dresspassword);
  	$query = "SELECT * FROM dresssellerpanel WHERE username='$dressusername' AND password='$dresspassword'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) 
  	{
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Login Success";
  	  header('location:dresssellerpanel.php');
    }
    else
    {
    	echo "<script>alert('Wrong Information')</script>";
    	 header('location:dresssellerlogin.php');
    }
} 

if (isset($_POST['adminlogin'])) 
{

  $adminusername = mysqli_real_escape_string($con, $_POST['adminusername']);
  $adminpassword = mysqli_real_escape_string($con, $_POST['adminpassword']);

    
  	$query = "SELECT * FROM adminpanel WHERE username='$adminusername' AND password='$adminpassword'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) 
  	{
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Login Success";
  	  header('location:adminpanel.php');
    }
    else
    {
    	echo "<script>alert('Wrong Information')</script>";
    	 header('location:adminlogin.php');
    }
} 



?>