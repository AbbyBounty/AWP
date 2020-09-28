<?php



$sum=0;

while($_GET['number']!=0)
    {
        $sum=$sum+$_GET['number']%10;
        $_GET['number']=$_GET['number']/10;
    }

    print($sum);
 

?>