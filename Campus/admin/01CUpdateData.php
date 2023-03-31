<?php
session_start();
include '../mycon.php';
$cid=$_REQUEST['cid'];
$name=$_REQUEST['name'];
$founder=$_REQUEST['founder'];
$founded=$_REQUEST['founded'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];
$services=$_REQUEST['services'];
$q="update company set services='$services',name='$name',founder='$founder',founded='$founded',email='$email',password='$password',address='$address' where cid=$cid";
if($con->query($q))
{
   $_SESSION['cupdate']="Company has successfully updated.";
}
else
{
    $_SESSION['cupdate']="Sorry Company does  not updated.";
}
header("location:./01CHome.php");
?>