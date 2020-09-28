

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</head>
<body>


<?php

$array = [
            "Admin" => ["Jack" ,"Gates" ],
             "Development" => ["Smith" ,"Rayn","David"],
             "Sales" =>["Remo","Steven","Jimmy","Samantha"],
            "Marketing"=> ["Stru","Kenn","Henry" ,""]
        ];



    print('<table border=1 class="table  table-dark">');
foreach ($array as $key=>$value){
	$x = count($value);
	echo "<tr>";
	echo "<td rowspan=".$x.">".$key."</td>";
	$num = 1;
	foreach($value as $v)	
     {
		if($num == 1)
			echo("<td> ".$v."</td> </tr>");
		else
 	           echo("<tr> <td> ".$v."</td> </tr>");
		$num++;
     }	
	echo "</tr>";
	
}
echo("</table>");
?>
 
</body>
</html>

