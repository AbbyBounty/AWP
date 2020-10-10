<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<?php
$name=$_REQUEST["name"];
$phone=$_REQUEST["phone"];
$email=$_REQUEST["email"];

setcookie('name',$name);
setcookie('phone',$phone);
setcookie('email',$email);


if(isset($_COOKIE['name']))
{
    print("<h5 class='btn-success'>".$_COOKIE['name']."</h5>");
}

if(isset($_COOKIE['phone']))
{
    print("<h5 class='btn-success'>".$_COOKIE['phone']."</h5>");
}

if(isset($_COOKIE['email']))
{
    print("<h5 class='btn-success'>".$_COOKIE['email']."</h5>");
}


?>
 
</body>
</html>