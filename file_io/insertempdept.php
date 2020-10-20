
<?php
         
             $eid= $_REQUEST["eid"];
             $ename= $_REQUEST["ename"];
             $sal= $_REQUEST["sal"];
             $dept= $_REQUEST["dept"];

             $con = mysqli_connect("localhost:3306","root","","test");
            
             if($con)
             {
                 $query= "insert into emp values($eid,'$ename',$sal,$dept)";
                 if(mysqli_query($con,$query))
                 echo("</br>Inserted");
                 else
                 echo("</br>Insertion Failed :".mysqli_error($con));
                 mysqli_close($con);
             }

?>