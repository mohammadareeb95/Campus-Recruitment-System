<?php
session_start();
include '../mycon.php';
$id=$_REQUEST['id'];
$q="delete from job where id=$id";
if($con->query($q))
{
    $_SESSION['cd']="Job has been successfully removed.";
}
else
{
   $_SESSION['cd']="Sorry Job was not removed.";
}
header("location:./01AJobs.php");
?>