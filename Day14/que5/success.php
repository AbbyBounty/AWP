<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <?php

$id=$_GET['id'];

$conn=mysqli_connect('localhost','root','','mydb',3306);
$query="select * from emp where id='$id'";

// print($query);

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);


if ($row!=null) {
    print("
<table border='1' class='table'>
<thead class='thead-dark'>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>dept-no</th>
</tr>
</thead>
<tbody>");

    print("<tr>");
    print("<td>".$row["id"]."</td>");
    print("<td>".$row["name"]."</td>");
    print("<td>".$row["email"]."</td>");
    print("<td>".$row["phone"]."</td>");
    print("<td>".$row["dno"]."</td>");

    print("</tr>");


    print(" </tbody>
</table>");
}
else{
    print('<h4 class="btn-warning">user not found<h4>');
}

?>
</body>
</html>