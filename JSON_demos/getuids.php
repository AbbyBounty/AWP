<?php
   
   
   $key=$_REQUEST["start"];
   $con= mysqli_connect("localhost","root","","shoppingdb");
   $result = mysqli_query($con,"select * from users where uid like '$key%'");
    
	$str = '{"uids":['; 
	 while($row = mysqli_fetch_assoc($result))
	 {
		$str .= '"'.$row["uid"].'",'; 
	 }
	 
	$str=substr($str,0,-1); //remove , after last object
    $str.= ']}'; 
	echo($str);
?>