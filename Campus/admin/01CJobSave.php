<?php
session_start();
include '../mycon.php';
$cid=$_REQUEST['cid'];
$cname=$_REQUEST['cname'];
$title=$_REQUEST['title'];
$salary=$_REQUEST['salary'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$cperson=$_REQUEST['cperson'];
$location=$_REQUEST['location'];
$pic=$_REQUEST['pic'];
$q="insert into job(cname,title,salary,location,mobile,email,cperson,cid,pic)values('$cname','$title',$salary,'$location','$mobile','$email','$cperson',$cid,'$pic');";
if($con->query($q))
{
    $_SESSION['job_save']="Job has successfully  Registered.";
}
else
{
   $_SESSION['job_save']="Sorry Job does not Registered.";
}
header("location:./01CJobRegister.php");
?>
