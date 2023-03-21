<?php 
  //Declaring constant tax
  define("TAX_RATE", 0.1805);
  //Declaring other variables and converting to floats
  $hours = floatval($_POST["number of hours"]);
  $rate = floatval($_POST["hourly rate"]);
  $total = $hours * $rate;
  //number_format($number, $numberOfDecimals) rounds off decimals
  $tax = number_format($total * TAX_RATE, 2);
  $pay = number_format($total - $tax, 2);
?>

You will get $<?php echo "$pay" ?>. <br>
The government will take $<?php echo "$tax" ?>.
