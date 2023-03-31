<?php
session_start();
include '../mycon.php';
$cid=$_REQUEST['cid'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="../pic/";
move_uploaded_file($tmp, $location.$pic);
$q="update company set pic='$pic' where cid=$cid";
if($con->query($q))
{
    header("location:./01CHome.php");
}
else
{
    echo "Sorry pic can't be updated.";
}
?>