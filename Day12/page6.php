
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
$cnt=1;
print('<table border=1 class="table table-dark table-striped">');
for ($i=0;$i<$_GET['row'];$i++) {
    print('<tr>');
    for ($j=0;$j<$_GET['col'];$j++) {
        print('<td>');
        print($cnt);
        print('</td>');
        $cnt++;
    }
    print('</tr>');
}
print('</table>');
?>   
</body>
</html>
