<?php

     $did= $_REQUEST["dept"];
    
      echo("<ul>");
  $con=mysqli_connect("localhost","root","","test");
  $result=mysqli_query($con,"select * from emp where dept = $did");
  while($row = mysqli_fetch_assoc($result))
	{
		$eid = $row["eid"];
        $enm = $row["ename"];		
		echo("<li>$enm = $eid</li>");
	}
   echo("</ul>");

?>