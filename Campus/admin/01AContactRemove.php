<?php
session_start();
include '../mycon.php';
$id=$_REQUEST['id'];
$q="delete from contact where id=$id";
if($con->query($q))
{
    $_SESSION['cd']="Contact has successfully removed.";
}
else
{
   $_SESSION['cd']="Sorry Contact does not removed.";
}
header("location:./01AContacts.php");
?>