<?php
session_start();
// echo" HELLO       ";
include("include/conn.php");

if (isset($_SESSION['u'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/8c87e844f2.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class=" container-fluid main_container">
            <?php include("include/header.php")?>
            <div class="row ">
                <div class="col-md-12" style="text-align:center;">
                    <table class="table table-striped">
                        <tr >
                            <th>S.NO</th>
                            <th>User photos</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Operations</th>
                        </tr>
                        <?php
                        $i = 1;
                        $query = "select * from register";

                        $data = mysqli_query($conn, $query);
                        while ($res = mysqli_fetch_assoc($data)) {
                        ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                
                                <td><img src="img/upload/<?php echo $res['img']; ?>" alt="" style="height: 90px;"><br><br><a href="uploadimg.php?id=<?php echo $res['id']?>" class="btn btn-primary">Upload</a></td>

                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['phone'] ?></td>
                                <td><a href="edit.php?id=<?php echo $res['id']?>"><i class="fa-solid fa-pen-to-square" title="EDIT"></i></a> |
                                    <a href="delete.php?id=<?php echo $res['id'] ?> " title="DELETE"> <i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                        
                    </table>
                    <?php 
                    
                    if (isset($_SESSION['msg'])) {
                        echo ' <div class="alert alert-danger">';
                        echo  $_SESSION['msg'];
                        echo '</div>';
                        unset($_SESSION['msg']);
                    }?>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
}

?>
<!-- <br>
<br>

<h2><a href="logout.php"> Logout</a></h2> -->