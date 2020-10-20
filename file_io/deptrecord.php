<?php
      
        $dept=$_REQUEST["dname"];
            
            $con=mysqli_connect("localhost:3306","root","","test");

            if($con)
          {
            $query="select * from emp join dept on(dept=deptno) where dname='$dept'";
    
            $result= mysqli_query($con,$query);
       
            echo("<table border=1>");

            while($row=mysqli_fetch_assoc($result))
            {
                echo("<tr>");
                 echo("<td>".$row["eid"]."</td>");
                 echo("<td>".$row["ename"]."</td>");
                 echo("<td>".$row["sal"]."</td>");
                 echo("<td>".$row["dept"]."</td>");
                 echo("</tr>");
                
            }
             echo("</table>");
             mysqli_close($con);
          }


?>