<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  <style>

    .signup {
      width: 500px;
      height: 550px;
      border: solid lightgray 2px;
      padding: 20px;

      margin: auto;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: lightyellow;
      box-shadow: 0 0 10px 2px lightgray;
      border-radius: 10px;
    }

  </style>
</head>
<body>
<form action="success.php" method="GET">
    <div class="signup">
      <div class="form-group">
        <label for="name">Name</label>
        <input required name="name" type="text" class="form-control" placeholder="name here">
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input required name="phone" type="tel" class="form-control" placeholder="phone here">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input required name="email" type="email" class="form-control" placeholder="email here">
      </div>

       <div class="form-group">
       <label for="dept">Department</label>
      <select name="dept" id="" class="form-control" name="dept">
    

      <?php

      $conn=mysqli_connect('localhost','root','','mydb',3306);
      $query="select * from dept";

      $result=mysqli_query($conn,$query);

      while($row=mysqli_fetch_assoc($result)){
        $dno=$row['id'];
        $dname=$row['dname'];

        print("<option value='$dno' >".$dname."</option>");
        mysqli_close($conn);
      }


      ?>
   
      </select>
         </div>



      <div class="form-group">
        <label for="password">Password</label>
        <input required name="password" type="password" class="form-control" placeholder="password here">
      </div>


      <div class="form-group">
        <div>
          Already have an account?<a class="btn btn-link" href="signin_1.html">Sign in here</a>
        </div>
        <input type="submit" class="btn btn-success" value="Signup">
      </div>
    </div>
  </form>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>