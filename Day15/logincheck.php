<?php

  // super global variables
  // associative array
  // $_GET, $_POST, $_REQUEST, $_ENV, $_SERVER, $_SESSION, $_FILES  

  // print("from signup.php PAGE");

  // insert the values into the table (db)


  $connection = mysqli_connect('localhost', 'root', '', 'shoppingdb');
  if (!$connection) {
    print("db can not be connected");
  }

  $query = "select * from user where email = '" . $_GET["email"] . "' and password = '" . $_GET["password"] . "';";

  $result = mysqli_query($connection, $query);

  $num_rows = mysqli_num_rows($result);
  if ($num_rows == 0) {
    // user not found
    // print("no_user");
    setcookie('uid','uid');
    header('location:login.php');
  } else {
    // print("user_found");
    setcookie('uid','uid',time()-1);
    header('location:success.html');
  
  }

  mysqli_close($connection);
  
?>