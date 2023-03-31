<?php
session_start();
include './mycon.php';
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$role=$_REQUEST['role'];
if($role=="Admin")
{
    if($email=="admin@gmail.com" && $password=="123@123")
    {
        header("location:./admin/01AHome.php");
        
    }
    else
    {
        $_SESSION['fail']="Sorry Login has failed.";
        header("location:./login.php");
    }
}
if($role=="Student")
{
    $q="select * from student where email='$email' and password='$password'";
    $re=$con->query($q);
    if($r=$re->fetch_assoc())
    {
        $_SESSION['sid']=$r['sid'];
        header("location:./admin/01SHome.php");
    }
    else
    {
        $_SESSION['fail']="Sorry Student Login has failed.";
        header("location:./login.php");
    }
}
if($role=="Company")
{
    $q="select * from company where email='$email' and password='$password'";
    $re=$con->query($q);
    if($r=$re->fetch_assoc())
    {
        $_SESSION['cid']=$r['cid'];
        header("location:./admin/01CHome.php");
    }
    else
    {
        $_SESSION['fail']="Sorry Company Login has failed.";
        header("location:./login.php");
    }
}
?>