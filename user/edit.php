<?php
session_start();
include("include/conn.php");
$id=$_GET['id'];
$_SESSION['id']=$id;
if(isset($_GET['id'])){

    $query="SELECT * FROM register WHERE id=$id";
    $data = mysqli_query($conn, $query);
    $res = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <style>
          body {
       background: linear-gradient(rgba(245, 246, 252, 0.66), rgba(40, 125, 100, 0.75));
       background-size: cover;
       height: 100vh;
       overflow: hidden;
       display: flex;
       }
       .head1{
            margin-top: 8%;
            padding: 2%;
            text-align: center;
        }
        form{
            padding: 2% 12% 12% 12%;
        }
    </style>
</head>
<body>
<div class=" container-fluid main_container">
    <?php include("include/header.php"); ?> 
    <div class="row">
        <div class="col-md-4 offset-4 cont custom-b" style=" margin-top:4%; background-color:#ffff; border-radius:22px;">
            <h3 class="head1">Update your Data</h3>
            <br />
            <form action="processEdit.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" id="" value="<?php echo $res['name']?>" class="form-control" placeholder=" Enter the Name" required style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br />
                <input type="text" name="email" id="" value="<?php echo $res['email']?>" class="form-control" placeholder=" Enter the Email" required style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br />
                <input type="number" name="phone" id="" value="<?php echo $res['phone']?>" class="form-control" placeholder=" Enter the Phone" required style="border-radius: 12px;  box-shadow: 5px 5px 7px lightgrey "><br />
                <input type="file" name="fileToUpload" value="<?php echo $res['img']?>"> <br><br>
                <input type="submit" value="Update" class="form-control btn btn-primary"> <br>
            </form>
            <?php
               if (isset($_SESSION['msg'])) {
                echo '<br> <div class="alert alert-danger">';
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
}

?>
