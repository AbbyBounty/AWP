<?php
   
   
   $cnm=$_REQUEST["cnm"];
   $con= mysqli_connect("localhost","root","","test");
   $result = mysqli_query($con,"select * from customers where city = '$cnm'");
    
	$str = '['; 
	 while($row = mysqli_fetch_assoc($result))
	 {
		 $str.= '{';
		 //$str.= '"key":"'.$row["col"].'",';
		 $str.= '"cid":"'.$row["cid"].'",';
		 $str.= '"add1":"'.$row["line1"].'",';
		 $str.= '"add2":"'.$row["line2"].'",';
		 $str.= '"deals":'.$row["transaction"];
		 $str.= '},';
	 }
	 $str=substr($str,0,-1); //remove , after last object
    $str.= ']'; 
	echo($str);
?>