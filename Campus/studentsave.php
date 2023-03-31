<?php
session_start();
include './mycon.php';
$name=$_REQUEST['name'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$qualification=$_REQUEST['qualification'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="pic/";
move_uploaded_file($tmp, $location.$pic);
$address=$_REQUEST['address'];
$q="insert into student(name,dob,gender,email,password,qualification,pic,address,duration) values('$name','$dob','$gender','$email','$password','$qualification','$pic','$address',now());";


if($con->query($q))
{
    
  $_SESSION['studentsave']=" Registration has successfully completed.";  
}
else
{
  
  $_SESSION['save']="Sorry registration has failed."; 
}
header("location:./login.php");
?>




