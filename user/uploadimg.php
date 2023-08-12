<?php
session_start();
include("include/conn.php");
$id = $_GET['id'];
if (isset($_GET['id'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Upload</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
        <style>
             body {
       background: linear-gradient(rgba(245, 246, 252, 0.66), rgba(40, 125, 100, 0.75));
       background-size: cover;
       height: 100vh;
       overflow: hidden;
       display: flex;
       }
        </style>
    </head>

    <body >
        <div class=" container-fluid main_container">
          <?php include("include/header.php"); ?>           
           <div class="row">
                <div class="col-md-6 offset-3 cont custom-b" style="
                  border: 2px solid black;
                  padding: 2%;
                  margin: 2% 25%;
                  background-color: rgb(225, 230, 225);
                   ">
                    <h3 style="text-align:center;">Update Photo</h3>
                    <br />
                    <form action="upload_process.php" method="post" enctype="multipart/form-data" style="text-align: center;">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="file" name="fileToUpload"><br><br>
                        <input type="submit" name="submit" value="Upload" class="btn btn-primary btn-lg btn-block"><br>
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
    </body>

    </html>
<?php
}

?>