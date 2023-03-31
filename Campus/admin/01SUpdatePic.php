<?php
session_start();
include '../mycon.php';
$sid=$_REQUEST['sid'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="../pic/";
move_uploaded_file($tmp, $location.$pic);
$q="update student set pic='$pic' where sid=$sid";
if($con->query($q))
{
    header("location:./01SHome.php");
}
else
{
    header("Sorry Image does not update.");
}
?>