<?php
session_start();
include("include/conn.php");

$u=$_POST['username'];
$p=$_POST['password'];

$query="select * from register where email='$u' and password='$p' ";

$data=mysqli_query($conn,$query);


// $result=mysqli_fetch_assoc($data);
//     print_r($result);

if($result=mysqli_fetch_assoc($data)){
    if($u==$result['email']  && $p==$result['password']){
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        $_SESSION['u']=$result['name'];
        header("location:dashboard.php");
    }
    else{
        $_SESSION['msg']="Hacking Attempt";
       header("location:index.php");
    }
}
else{
        $_SESSION['msg']="Wrong Password";
        header("location:index.php");
}

// $real_u="gunjan";
// $real_pass="123";

// if($u==$real_u  && $p==$real_pass){
//     $_SESSION['u']="$real_u";
//     header("location:dashboard.php");
// }
// else{
//     $_SESSION['msg']="Invaild User";
//     header("location:index.php");
// }


?>