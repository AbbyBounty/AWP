<?php

   $uid= $_REQUEST["uid"];
   
  
  $con=mysqli_connect("localhost","root","","shoppingdb");
  $result=mysqli_query($con,"select * from users where uid = '$uid'");
   
  $no=mysqli_num_rows($result);
  if($no==1)
	   echo("UID is already used,select another");
   else
	   echo("UID is available to use.");


?>