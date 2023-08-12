<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

include("include/conn.php");

if($repassword!=""  && $password==$repassword){
    $query="INSERT INTO register (name,email, phone, password, repassword) VALUES ('$name' ,'$email', '$phone', '$password', '$repassword')";
    if(mysqli_query($conn,$query)){
    $_SESSION['msg']="User register SucessFully";
    header("location:index.php");
    }
   else{
    $_SESSION['msg']="Some error occurs please try again";
    header("location:register.php");
   }
}
else{
    $_SESSION['msg']="Wrong Password";
    header("location:register.php");
}



?>