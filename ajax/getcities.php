<?php

  $sid= $_REQUEST["state"];
  
  $con=mysqli_connect("localhost","root","","statecitydb");
  $result=mysqli_query($con,"select * from city where stateid = $sid");
  while($row = mysqli_fetch_assoc($result))
	{
		$cid = $row["cityid"];
        $cnm = $row["name"];		
		echo("<option value='$cid'>$cnm</option>");
	}
	


?>