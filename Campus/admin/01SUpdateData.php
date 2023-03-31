<?php
session_start();
include '../mycon.php';
$sid=$_REQUEST['sid'];
$name=$_REQUEST['name'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$qualification=$_REQUEST['qualification'];
$address=$_REQUEST['address'];
$mobile=$_REQUEST['mobile'];
$q="update student set mobile='$mobile',name='$name',dob='$dob',email='$email',password='$password',qualification='$qualification',address='$address' where sid=$sid";
if($con->query($q))
{
    $_SESSION['supdate']="Student Information has successfully updated.";
}
else
{
    $_SESSION['supdate']="Sorry Student does not updated.";
}
header("location:./01SHome.php");
?>