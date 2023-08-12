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
            <div class="col-md-6 offset-3" style=" margin-top:3%; margin-bottom:10%; text-align:center;">
                <select name="option" id="primary" class="form-control">
                    <option value="planet">Planet</option>
                    <option value="car">Cars</option>
                    <option value="flower">Flowers</option>
                    <option value="animal">Animals</option>
                </select>
            </div> 
        </div>
        <div class="row" id="response">
        <div id="sec" class="col-md-6 offset-3 " style=" text-align:center; ">
                <select name="" id="" class="form-control">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <script>
            $(document).ready(function(){

                $('#primary').change(function(){
                    var p ="q="+$('#primary').val();
                    // alert(p);
                })
                $.ajax({
                    type:"POST",
                    url:"jqOptionProcess",
                    success:function(response){
                        $('#sec').html(p);
                    }
                })

            })
        </script>

   
</body>
</html>