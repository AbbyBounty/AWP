<?php

header('Content-Type:text/html');
print("Length os String is : ".strlen($_GET['number']));

print("<br>");
print("Reverse String : ".strrev($_GET['number']));


?>
