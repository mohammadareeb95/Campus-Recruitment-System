<?php
session_start();
include "../mycon.php";
$aid=$_REQUEST['aid'];
$q="delete from apply where aid=$aid";
if($con->query($q))
{
    $_SESSION['jrd']="Job request has successfully removed.";
}
else
{
    $_SESSION['jrd']="Job request does not removed.";
}
header("location:./01CJobRequests.php");
?>