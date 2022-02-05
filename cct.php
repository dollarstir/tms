<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
</head>
<body>
    <?php
    
    echo $data[0].'is in class '.$data[1];


   var_dump($_SERVER['REQUEST_URI']);
    ?>



    <form action="<?php $_SERVER['REQUEST_URI'];?>/tms/send" method="POST">

    <input type="number" name="num1"><br>
    <input type="number" name="num2">
    <input type="submit" value="Calculate">

    </form>
</body>
</html>