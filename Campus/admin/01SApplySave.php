<?php
session_start();
include '../mycon.php';
$jid=$_REQUEST['jid'];
$cid=$_REQUEST['cid'];
$name=$_REQUEST['name'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$qualification=$_REQUEST['qualification'];
$percentage=$_REQUEST['percentage'];
$resume=$_FILES['resume']['name'];
$tmp = $_FILES['resume']['tmp_name'];
$location="../pic/";
move_uploaded_file($tmp, $location.$resume);
$q="insert into apply(name,dob,email,mobile,qualification,percentage,resume,jid,cid,duration)values('$name','$dob','$email','$mobile','$qualification',$percentage,'$resume',$jid,$cid,now());";
if($con->query($q))
{
    $_SESSION['ac1']="Your application has successfully saved.\n We will contact very soon.";
}
else
{
    $_SESSION['ac1']="Your request is already pending.";
}
header("location:./01SJobsView.php?jid=$jid");
?>