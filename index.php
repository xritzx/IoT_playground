<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>IOt</title>
</head>
<body>
    <div class='jumbotron'>
        <a href="./" style="text-decoration:none; color:black"><h1 class="font-weight-light container">reKoGnEcion</h1></a>
    </div>

        <div class="container">    
        <h5>Welcome, <?php
        function checknset($var, $alt){
            if(isset($_GET[$var])){
                echo $_GET[$var];
            }else{
                echo $alt;
            }
        }
        checknset('name','');
        ?></h5>
        <br><hr>
        <p class="font-weight-light"> To use the IoT platform use your username with the URL Pattern</p>
        <br>
        <h3 class="font-weight-light">Example patterns:</h3>
        <ul class="font-weight-light">
            <li>http://domain.iot/create.html => <a href="create.html">Create </a> a user</li>
            <li>http://domain.iot/retrieve.php?name=<?php checknset('name','{usename}');?> => <a href="retrieve.php?name=<?php checknset('name','');?>">Retrieve </a> the Stored server value</li>
            <li>http://domain.iot/set.php?name=<?php checknset('name','{username}');?>&value={value} => Or<a href="set_val.php?name=<?php checknset('name','');?>"> Set </a> the value by form</li>
        </ul>
    </div>
</body>
</html>