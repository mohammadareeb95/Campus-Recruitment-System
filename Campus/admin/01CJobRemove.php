<?php
session_start();
include '../mycon.php';
$jid=$_REQUEST['jid'];
$q="delete from job where jid=$jid";
if($con->query($q))
{
   $_SESSION['jd']="Job has successfully removed.";
}
else
{
    $_SESSION['jd']="Sorry Job does not  removed.";
}
header("location:./01CJobs.php");
?>