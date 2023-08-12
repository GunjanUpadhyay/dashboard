<?php
session_start();
include("include/conn.php");


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $del=mysqli_query($conn," DELETE FROM register WHERE register.id = $id");
    $_SESSION['msg']="Deleted SuccessFully";
    header("location:dashboard.php");
   
}


?>