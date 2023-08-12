<?php
session_start();
include("include/conn.php");
if(isset($_POST['submit'])){
$time=time();
$random=rand(100,10000);
$token=md5($time.$random);

$email=$_POST['email'];
$q1="SELECT * FROM register WHERE email='$email' ";

$out=mysqli_query($conn,$q1);


if($res=mysqli_fetch_assoc($out)){
    $old_pass=$res['password'];
    $q2="INSERT INTO forgot(email,token,old_pass) VALUES ('$email','$token','$old_pass')";
    if(mysqli_query($conn,$q2)){
        $fh=fopen("temp.txt","a");
        $date=date('d M Y h:i:s A');
        $url="http://localhost/user/forgot_P_check.php?t=$token"; // rectify
        $val="$url  $date ";
        $val.="\n__________________________\n";
        fwrite($fh,$val);
        fclose($fh);

        $_SESSION['msg']="Check Your mail";
        header("location:index.php");
    }
    else{
        $_SESSION['msg']="wrong email";
        header("location:index.php");
    }
}
else{
    $_SESSION['msg']="Invalid user, User is not match";
    header("location:index.php");
}

}
?>  