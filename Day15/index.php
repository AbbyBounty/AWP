<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    cookie</h1>


    <?

setcookie('username',$_REQUEST['uid'],time()+12);

print($_COOKIE['username']);
print($_REQUEST['uid']);

?>
</body>
</html>