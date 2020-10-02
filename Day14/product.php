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


function function1() {
    
    
    print("opening connection");

    // step 1: create/open the connection
    $link = mysqli_connect('localhost', 'root', '', 'mydb', 3306);
    
    // step 1.1: select the db
    // mysqli_select_db($connection, $db);
    
    // step 2: prepare the query
    $query = "select id, title, description, price from products;";
    // print($query);

    // step 3: execute the query
    print("executing query");
    $result = mysqli_query($link, $query);
   
 

 print("
    <table border='1' class='table'>
    <thead class='thead-dark'>
    <tr>
    <th>id</th>
    <th>title</th>
    <th>description</th>
    <th>price</th>
    </tr>
    </thead>

    <tbody>");
    while ($row=mysqli_fetch_assoc($result)) {
    print("<tr>");
    print("<td>".$row["title"]."</td>");
    print("<td>".$row["title"]."</td>");
    print("<td>".$row["description"]."</td>");
    print("<td>".$row["price"]."</td>");
    print("</tr>");
    }

   print(" </tbody>
    </table>");

    print("closing connection");
    // step 5: close the connection
    mysqli_close($link);
  }

  function1();


?>
</body>
</html>