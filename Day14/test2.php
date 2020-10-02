<?php

$conn=mysqli_connect('localhost','root','','mydb',3306);
      $query="select * from dept";

      $result=mysqli_query($conn,$query);

      while ($row=mysqli_fetch_assoc($result)) {
          $dno=$row['id'];
          $dname=$row['dname'];

          print($dno);

        //   print("<option value='$dno'>".$dname."</option>");
      }
?>
