<?php
session_start();
include '../mycon.php';
$jid=$_REQUEST['jid'];
$title=$_REQUEST['title'];
$salary=$_REQUEST['salary'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$cperson=$_REQUEST['cperson'];
$idate=$_REQUEST['idate'];
$qualification=$_REQUEST['qualification'];
$percentage=$_REQUEST['percentage'];
$skills=$_REQUEST['skills'];
$location=$_REQUEST['location'];
$description=$_REQUEST['description'];
$status=$_REQUEST['status'];
$category=$_REQUEST['category'];
$vacancy=$_REQUEST['vacancy'];
$pdate=$_REQUEST['pdate'];
$q="update job set pdate='$pdate',category='$category',vacancy='$vacancy',status='$status',skills='$skills',idate='$idate',title='$title',salary='$salary',location='$location',description='$description',email='$email',mobile='$mobile',cperson='$cperson',qualification='$qualification',percentage='$percentage' where jid=$jid";
if($con->query($q))
{
    $_SESSION['job_update']="Job has successfully updated.";
}
else
{
    $_SESSION['job_update']="Sorry Job does not updated.";
}
header("location:./01CJobView.php?jid=$jid");
?>