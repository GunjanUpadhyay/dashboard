<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <title>Document</title>
    <script src="js/jquery-3.7.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" >
            <div class="col-md-6 offset-3" style="border: 2px solid black; margin:10%; padding:4%; text-align:center;">
                <input type="text" name="name" id="name" placeholder="Enter Your name" class="form-control"><br><br>
                <input type="button" value="Submit" id="submit" class="btn btn-primary">
                <div class="print" id="print"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                var name=$('#name').val();
                alert("Your name is "+name);
            });
            $("#print").click(function(){
                var name=$('#name').val();
                alert("Your name is "+name);
            });
        });
    </script>
</body>
</html>