<?php
session_start();

if(isset($_SESSION['t_success']) && "Token authorization by Gunjan"){
    $email=$_SESSION['email_fp'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .head{
            margin-top: 8%;
            padding: 2%;
            text-align: center;
        }
        form{
            padding: 2% 12% 12% 12%;
        }
        body {
       background: linear-gradient(rgba(245, 246, 252, 0.34), rgba(68, 156, 109, 0.75)), url(img/forgotimage.jpg) no-repeat center center fixed;
       background-size: cover;
       height: 100vh;
       overflow: hidden;
       display: flex;
       }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4" style="margin-top:10%;   background-color: #ffff; border-radius:33px">
            <h4 class="head">Update Password</h4>
                <form action="forgot_PS_process.php" method="post" class="font-weight-bolder">
                <input type="password" name="password" id="" placeholder="Enter the password" class="form-control" required style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey ">
                <br>
                <input type="password" name="re-password" id="" placeholder="Confirm the password" class="form-control" required style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey ">
                <br>
                <input type="submit" value="Update" name="submit" class="form-control btn btn-primary">
                </form>       
           <?php 
           
           if(isset($_SESSION['msg'])){
               echo ' <br><div class="alert alert-danger">';
               echo  $_SESSION['msg'];
               echo'</div>';
               unset($_SESSION['msg']);
           }
            ?> 
            </div>
        </div>
    </div>
</body>
</html>

<?php 

}
?>