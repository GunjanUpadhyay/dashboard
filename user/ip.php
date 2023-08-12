<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>IP Details</title>
    <script src="js/jquery-3.7.0.min.js"></script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .head{
            color: white;
            text-align: center;
            padding: 12px;
        }
    </style>
</head>

<body >
    <div class="contaner">
        <div class="navbr" style="background-color: rgb(0,0,0);">
             <h2 class="head">Ip Details</h2>
         </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 offset-4">
            <br>
            <h3 style="text-align: center; margin:12px;">Enter Your IP Address Here!</h3><br>
            <input type="text" name="ip" id="ipAdd" class="form-control" placeholder="IP Address" require><br>
            <input type="submit" value="Submit" id="submit" class="btn btn-info form-control"><br>
        </div>
    </div>

    <div id="response">
        
    </div>

    <script>
        $(document).ready(function(){
            $('#submit').click(function(){
                var ip=$('#ipAdd').val();
                var data="ip="+ip;
                // alert("Exexute  "+data);
                $.ajax({
                type:"POST",
                url:"ipProcess.php",
                data:data,
                success:function(data){
                    $('#response').html(data);
                }
            });
                
            })
        })
    </script>
</body>

</html>























<!-- 
<td>Status</td>
                    <td>Country</td>
                    <td>CountryCode</td>
                    <td>Region</td>
                    <td>RegionName</td>
                    <td>city</td>
                    <td>Zip</td>
                    <td>TimeZone</td>
                    <td>isp</td>
                    <td>as</td>
                    <td>Query</td> -->