<?php
session_start();
include '../mycon.php';
$sid=$_REQUEST['sid'];
$status=$_REQUEST['status'];
$q="update student set status='$status' where sid=$sid";
if($con->query($q))
{
   $_SESSION['ssu']="Student has successfully updated.";
}
else
{
    $_SESSION['ssu']="Sorry Student does not updated.";
}
header("location:./01AStudentView.php?sid=$sid");
?>