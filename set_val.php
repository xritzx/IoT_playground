<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Set Node Value</title>
</head>
<body>

<div class='jumbotron'>
  <a href="./" style="text-decoration:none; color:black"><h1 class="font-weight-light container">reKoGnEcion</h1></a>
</div>

<?php 
function checknset($var, $alt){
  if(isset($_GET[$var])){
      echo $_GET[$var];
  }else{
      echo $alt;
  }
}
?>

<div class="container">
<form method='get' action=set.php>
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" id="name" placeholder="Username whose value to be changed" name="name" value="<?php checknset('name', 'Username');?>">
  </div>
  <div class="form-group">
    <label for="value">Value</label>
    <input type="text" class="form-control" id="value" placeholder="Change the value here" name="value">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


</body>
</html>