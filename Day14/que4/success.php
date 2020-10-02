<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$password=$_GET['password'];
$dno=$_GET['dept'];

$conn=mysqli_connect('localhost','root','','mydb',3306);
$query="insert into emp(name,phone,email,password,dno) values ('$name','$phone','$email','$password',$dno)";

print($query);
$result=mysqli_query($conn,$query);

if($result)
{
    print("<br> inserted !!");
}
else
{
    print("<br> failed !!".mysqli_error($conn));
}
mysqli_close($conn);
?>

</body>
</html>