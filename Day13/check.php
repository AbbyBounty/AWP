<?php

if(strcmp($_GET['uname'],"rayn")==0 && strcmp($_GET['pwd'],"rayn")==0 )
{

    header('location: welcome.php');
}
else
{
    header('location: page2.html');
}


?>
