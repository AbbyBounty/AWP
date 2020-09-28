<?php


$fact=1;

for($i = 1; $i <=$_GET['number']; $i++)
    {
        $fact *= $i;
    }


    print("Factorial of ".$_GET['number']." is ".$fact);
    



?>
