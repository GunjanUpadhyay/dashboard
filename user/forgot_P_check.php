<?php 
session_start();
include("include/conn.php");
$token=$_GET['t'];
$q="SELECT * FROM forgot WHERE token='$token' AND status='1'";
$out=mysqli_query($conn,$q);
if($res=mysqli_fetch_assoc($out)){
    $_SESSION['email_fp']=$res['email'];
    $_SESSION['t_success']="Token authorization by Gunjan";
    header("location:forgot_P_success.php");
}
else{
    $_SESSION['t_success']="Token Expired";
    header("location:forgot.php");
}

?>