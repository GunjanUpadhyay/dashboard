<?php
session_start();

if (isset($_SESSION['u'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <style>
        .head1{
            margin-top: 8%;
            padding: 2%;
            text-align: center;
        }
        form{
            padding: 2% 12% 12% 12%;
        }
        body {
       background: linear-gradient(rgba(68, 156, 109, 0.34), rgba(3, 46, 33, 0.75));
       background-size: cover;
       height: 100vh;
       overflow: hidden;
       display: flex;
       }
     </style>
</head>

<body >
    <div class="container-fluid main_container">
    <?php include("include/header.php")?>
       <div class="row">
        <div class="col-md-4 offset-4"  style=" margin-top:4%; background-color:#ffff; border-radius:22px;">
            <h3 class="head1">Insert new User</h3>
            <br>
            <form action="insertProcess.php" method="post" >
                <input type="text" name="name" id="" class="form-control" placeholder=" Enter the Name" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <input type="text" name="email" id="" class="form-control" placeholder=" Enter the Email" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <input type="number" name="phone" id="" class="form-control" placeholder=" Enter the Phone" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br />
                <input type="password" name="password" id="" class="form-control" placeholder=" Enter the Password" required  style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                <!-- <p style=" text-align:center;"><a href="uploadimg.php" style="text-decoration:none; font-weight:bold;" >Upload Photo</a></p> --> 
                <input type="file" name="fileToUpload"><br><br>
                <input type="submit" value="Insert" class="form-control btn btn-primary"> <br>
            </form>
            <?php

            if (isset($_SESSION['msg'])) {
                echo '<br> <div class="alert alert-danger">';
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
<?php }
else{
    header("location:index.php");
}
?>