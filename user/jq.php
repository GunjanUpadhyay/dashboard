<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="js/jquery-3.7.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 " id="dive1" style="border: 2px solid black; height:400px; width:400px; margin:8%;">
            </div>
            <div class="col-md-6 offset-3 " id="dive2" style="border: 2px solid black; height:400px; width:400px; margin:8%;">
            </div>
        </div>
   </div>
   <script>
    $(document).ready(function(){
        $('#dive1').hover(function(){
            $("#dive1").css("background-color","red");
            $("#dive1").css("border-radius","50%");
            $("#dive2").css("background","white");
            $("#dive2").css("border-radius","1px");
        });
        $('#dive2').hover(function(){
            $("#dive2").css("background-color","red");
            $("#dive2").css("border-radius","50%");
            $("#dive1").css("background","white");
            $("#dive1").css("border-radius","1px");
        });

    });
   </script>
</body>

</html>