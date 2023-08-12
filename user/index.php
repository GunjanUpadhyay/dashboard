<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <style>
        .head{
            margin-top: 8%;
            padding: 2%;
        }
        form{
            padding: 2% 12% 5% 12%;
        }
        body {
       background: linear-gradient(rgba(245, 246, 252, 0.34), rgba(68, 156, 109, 0.75)), url(img/pexels-ylanite-koppens-1445416.jpg) no-repeat center center fixed;
       background-size: cover;
       height: 100vh;
       overflow: hidden;
       display: flex;
       }

    </style>

</head>

<body >
     <div class=" container-fluid main_container">
        <div class="row">
            <div class="col-md-4 offset-4 cont custom-b" 
            style=" margin-top:8%; background-color:#ffff; border-radius:22px;">
                <h2 class="text-center head">LOGIN</h2><br>
                <form action="process.php" method="post" class="font-weight-bolder ">
                    <input type="text" name="username" id="" class="form-control " placeholder=" Enter the Username" required style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "> <br>
                    <input type="password" name="password" id="" class="form-control" placeholder="Enter the Password" required style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br>
                    <input type="submit" class="form-control btn btn-primary" value="Login" style="border-radius: 20px;"><br>
                    <p style=" text-align:center;"><a href="forgot.php" style="text-decoration:none;" >Forgot password?</a></p>
                    <p style=" text-align:center;">Not Register?<a href="register.php" style=" text-decoration:none; "class=" link-opacity-70-hover">Sign Up</a></p>
                </form>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo ' <div class="alert alert-danger">';
                    echo  $_SESSION['msg'];
                    echo '</div>';
                }
                ?>
                </div>
        </div>
    </div>
</body>

</html>

<?php
session_destroy();
?>