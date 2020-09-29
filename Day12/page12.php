<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

header('Content-Type:text/html');
print("Length os String is : ".strlen($_GET['number']));

print("<br>");
print("Reverse String : ".strrev($_GET['number']));


?>
</body>
</html>




