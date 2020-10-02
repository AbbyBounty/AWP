<?php

/*
  C: create
  R: read
  U: update
  D: delete
*/


  function function1() {
    // $host = 'localhost';
    // $user = 'root';
    // $password = 'root';
    // $db = 'mydb';
    // $port = 3306;
    
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
   
   
    // $row=mysqli_fetch_assoc($result);
   
    // print_r($result);

    // // step 4: read/process the result 
    // print("no of rows = " . mysqli_num_rows($result));
    // $row = mysqli_fetch_row($result);
    // while ($row = mysqli_fetch_row($result)) {
    //   print($row["title"]);
    // }

 print("
    <table border='1'>
    <thead>
    <tr>
    <td>id</td>
    <td>title</td>
    <td>description</td>
    <td>price</td>
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


    // ");
    // while ($row=mysqli_fetch_assoc($result)) {
    //     print("<br>");
    //     print($row["title"]);
    //     print("<br>");
    //     print($row["description"]);
    //     print("<br>");
    //     print($row["price"]);
    //     print("<br>");
    // }
    print("closing connection");
    // step 5: close the connection
    mysqli_close($link);
  }

  function1();



  function createProduct() {
    $title = "product 5";
    $description = "this is a product 5";
    $price = 500;

    // step 1: open the connection
    $connection = mysqli_connect('localhost', 'root', '', 'mydb');
    if (!$connection) {
      print("the database can not be connected");
    }

    // step 2: prepare the query
    $query = "insert into products (title, description, price) values ('$title', '$description', $price)";

    // step 3: execute the query
    $result = mysqli_query($connection, $query);

    // step 4: process the result
    print_r($result);
    
    // step 5: close the connection
    mysqli_close($connection);

    print("product created successfully");
  }

//   createProduct();


?>