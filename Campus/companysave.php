<?php
session_start();
include './mycon.php';
$name=$_REQUEST['name'];
$founder=$_REQUEST['founder'];
$founded=$_REQUEST['founded'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="pic/";
move_uploaded_file($tmp, $location.$pic);
$address=$_REQUEST['address'];
$services=$_REQUEST['services'];
$q="insert into company(name,founder,founded,email,password,pic,address,services,duration) values('$name','$founder','$founded','$email','$password','$pic','$address','$services',now());";

if($con->query($q))
{
  
  $_SESSION['companysave']=" Registration has successfully completed.";  
}
else
{
   
  $_SESSION['companysave']="Sorry registration has failed."; 
}
header("location:./companyRegister.php");
?>




