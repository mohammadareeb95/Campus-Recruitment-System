<?php
session_start();
include '../mycon.php';
$sid=$_REQUEST['sid'];
$resume=$_FILES['resume']['name'];
$tmp=$_FILES['resume']['tmp_name'];
$location="../pic/";
move_uploaded_file($tmp, $location.$resume);
$q="update student set resume='$resume' where sid=$sid";
if($con->query($q))
{
    $_SESSION['sru']="Student Resume has successfully updated.";
}
else
{
    $_SESSION['sru']="Sorry Student Resume does not updated.";
}
header("location:./01SHome.php");
?>