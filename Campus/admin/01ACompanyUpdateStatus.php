<?php
session_start();
include '../mycon.php';
$cid=$_REQUEST['cid'];
$status=$_REQUEST['status'];
$q="update company set status='$status' where cid=$cid";
if($con->query($q))
{
    $_SESSION['csu']="Company status has successfully updated.";
}
else
{
    $_SESSION['csu']="Sorry Company status does not updated.";
}
header("location:./01ACompanyView.php?cid=$cid");
?>