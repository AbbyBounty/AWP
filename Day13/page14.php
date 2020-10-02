<?php


print($_GET['number']);

print("<br>");
// print(date("F d, Y h:i:s",time())-$_GET['number']);

$year=date('Y',$_GET['number']);

print(strtotime($_GET['number']));

print("<br>");



?>
