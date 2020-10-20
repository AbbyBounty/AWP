<?php

    $con=mysqli_connect("localhost:3306","root","","test");
    if($con)
    {
        $query="select * from emp"; //query
        $result = mysqli_query($con,$query); //

        echo("<table border=1>");
        echo("<tr><th>ID</th><th>Name</th><th>salary</th><th>deptID</th></tr>");
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