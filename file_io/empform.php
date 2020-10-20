
<html>

     <body>   

          <form action = "insertempdept.php" >
            
              Employee id:  <input type="number" name="eid" / ></br>
              Employee name: <input type="text" name="ename" / ></br>
              Salary: <input type="number" name="sal" / ></br>
              department:  <select name ="dept" / >
                                    <?php
                                         $con=mysqli_connect("localhost:3306","root","","test");
                                         $query="select * from dept";
                                         $result = mysqli_query($con,$query);
                                         while($row= mysqli_fetch_assoc($result))
                                         {
                                              
                                              $dno=$row["deptno"];
                                              $dnm=$row["dname"];
                                              echo("<option value='$dno'>$dnm</option>");
                                         }
                                    ?>
                                    </select></br>
              <input type="submit"  value="insert emp"/>

          </form>

     </body>

</html>