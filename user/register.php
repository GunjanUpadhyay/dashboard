<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
         .head{
            margin-top: 5%;
          
            text-align: center;
        }
        form{
            padding: 0 8% 5% 8%;
        }
        body {
       background: linear-gradient(rgba(68, 156, 109, 0.34), rgba(3, 46, 33, 0.75)),
       url(img/pexels-irina-iriser-1090977.jpg) no-repeat center center fixed;
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
        <div class="col-md-6 offset-3  " style=" margin-top:6%; background-color: rgb(255,255,255); border-radius: 38px;">
            <h2 class="head">Sign Up</h2><br>
            <form action="register1.php" method="post" class="font-weight-bolder">
                <input type="name" name="name" id="" class="form-control" placeholder="Enter the name" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <input type="email" name="email" id="" class="form-control" placeholder="Enter the Email" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <input type="number" name="phone" id="" class="form-control" placeholder="Enter the Phone Number" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <input type="password" name="password" id="" class="form-control" placeholder="Enter the Password" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <input type="password" name="repassword" id="" class="form-control" placeholder="Re-enter the Password" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <input type="submit" class="form-control btn btn-primary" value="Register"><br><br>

                <p style="text-align:center;"><a href="index.php" style=" text-decoration:none; font-weight:600;" class=" link-opacity-70-hover">Log in</a></p>
            </form>

            <?php

            if (isset($_SESSION['msg'])) {
                echo ' <div class="alert alert-danger">';
                echo  $_SESSION['msg'];
                echo '</div>';
                unset($_SESSION['msg']);
            }
            ?>

        </div>
        </div>
    </div>
</body>

</html>

<?php
?>