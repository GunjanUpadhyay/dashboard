<?php
session_start();
include("include/conn.php");  
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_SESSION['id'];
$img=$_SESSION['img'];

    $query= "UPDATE register SET name='$name',img='$img',email='$email',phone='$phone' WHERE id=$id";

   if(mysqli_query($conn,$query)){
    $_SESSION['msg']="Data updated Successfully";
    header("location:dashboard.php");
    }else{
     $_SESSION['msg']="Some error occurs please try again";
    header("location:edit.php");
    }
?>
  <!-- $query= "UPDATE bekar SET name='$name', email='$email', phone='$phone' WHERE id=$id;";
   if(mysqli_query($conn1,$query)){
    $_SESSION['mssg']="Data insert Successfully";
    header("location:dashboard.php");
    }else{
     $_SESSION['mssg']="Some error occurs please try again";
    header("location:edit.php");
    } -->
