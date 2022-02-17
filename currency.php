
<?php require 'loader/autoloader.php';
$r1 = 'NSI';
$r2 = rand(1111111, 9999999);
$ref = $r1.''.$r2;
$s = new Yorksms();
 var_dump($s->sms('Dollarsoft', '0545934396', 'your OTP is 0454545'));

extract($_POST);
if (isset($btn)) {
    say('GHC '.Converter::currency($amount, $from, $to));
    $s = new Yorksms();
    say($s->sms('Dollarsoft', '0556676471', 'Welcome to Php York'));
    // var_dump($s->sms('Dollarsoft','0556676471',"Welcome to Php York"));
}
// covvert $50 to cedis
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
</head>
<body>

<!-- <form action="" method="POST">
    <input type="text" name="amount" id="">
    <input type="text" name="from">
    <input type="text" name="to">
    <input type="submit" value="Send" name="btn">


</form> -->

<!-- <form id="paymentForm">
                                                
                                                <button type="button"  onclick="payWithPaystack()" class="btn btn-success">Pay </button>
                                                </form>


                                                <script src="../sp/script/jquery.js"></script>
    <script src="../sp/script/popper.min.js"></script>
    <script src="../sp/script/bootstrap.min.js"></script> -->
  
    <!-- <form id="paymentForm">

<div class="form-group">

  <label for="email">Email Address</label>

  <input type="email" id="email-address" required />

</div>

<div class="form-group">

  <label for="amount">Amount</label>

  <input type="tel" id="amount" required />

</div>

<div class="form-group">

  <label for="first-name">First Name</label>

  <input type="text" id="first-name" />

</div>

<div class="form-group">

  <label for="last-name">Last Name</label>

  <input type="text" id="last-name" />

</div>



</form> -->
<p>Transion details </p>


    <p>Name: <?php say('Dollar stir'); ?></p>
    <p>Email: <?php say('kpin463@gmail'); ?></p>
    <p>Amount To pay: <?php say('50'); ?></p>
    <p>Phone Number: <?php say('0556676471'); ?></p>



        <?php
        $email = 'kpin463@gmail.com';

      //   $r = new Resetpass();
      //  echo $r->tomail('cmd',[
      //       "code"=>"355454",
      //   ],'email="'.$email.'"',"kpin463@gmail.com","37454");
        // Yorkpay::pay();
        // $p = new Yorkpay();
        // $p->payscript('Dollar', 'stir', 'kpin463@gmail.com', '0556676471', 50);

        // Yorkpay::handler();
        ?>


</body>
</html>