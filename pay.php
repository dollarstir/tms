
<?php
require 'loader/autoloader.php';

 $name = str_replace("%20",' ',$data[0]);
 $email = $data[1];
 $phone = $data[2];
 $amount = $data[3];
 $transid = $data[4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>
</head>
<body>
    <p style="background-color:green;color:white;padding:7px;border-radius:40px;width:300px;text-align:center;">Order Successful</p>
    <p>Order ID: <?php say($transid);?></p>
    <p>Paid by: <?php say($name);?></p>
    <p>Email: <?php say($email);?></p>
    <p>Amount paid: <?php say($amount);?></p>
    <p>Phone Number: <?php say($phone);?></p>
    
</body>
</html>