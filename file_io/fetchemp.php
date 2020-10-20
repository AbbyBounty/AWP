<?php
   
            $eid=$_REQUEST["eid"];
            
            $con=mysqli_connect("localhost:3306","root","","test");

            if($con)
          {
            $query="select * from emp where eid=$eid";
    
            $result= mysqli_query($con,$query);
    
            while($row=mysqli_fetch_assoc($result))
            {
              
                 echo("<br>".$row["eid"]."</br>");
                 echo("<br>".$row["ename"]."</br>");
                 echo("<br>".$row["sal"]."</br>");
                 echo("<br>".$row["dept"]."</br>");
                   
            }
             mysqli_close($con);
          }


?>