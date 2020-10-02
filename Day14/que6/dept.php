<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
</head>
<body>



    
<?php
$conn=mysqli_connect('localhost','root','','mydb',3306);
$query="select id,dname from dept";

$result=mysqli_query($conn,$query);



while($row=mysqli_fetch_assoc($result))
{
    $no=$row['dname'];
    $did=$row['id'];
    
    print("<a href='http://localhost/assignemt/sep30/que6/emp.php?did=$did'> ");
  
    print("<button name='id' value='$no' class='btn btn-success'>");
    print($row['dname']);
    print("</button>");
    print("</a>");

   

}


?>
</body>
</html>