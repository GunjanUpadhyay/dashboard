<?php
session_start();
include("include/conn.php");
$pass=$_POST['password'];
$repass=$_POST['re-password'];

$email=$_SESSION['email_fp'];

if($pass==$repass){
    $q1="UPDATE register SET password='$pass' WHERE email='$email'";
    if(mysqli_query($conn,$q1)){
         $q2="UPDATE forgot SET status='0' where email='$email'";
        mysqli_query($conn,$q2);
        $_SESSION['msg']="Password reset";
         header("location:index.php");

    }
    else{
        $_SESSION['msg']=" ------Error ----";
         header("location:forgot_P_success.php");
    }
}
else{
    $_SESSION['msg']="Password is not equal to repassword ";
     header("location:forgot_P_success.php");
}
?>