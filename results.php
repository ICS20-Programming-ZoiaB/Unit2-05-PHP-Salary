<?php 
  //Declaring a constant for tax rate
  define("TAX_RATE", 0.2005);
  //Declaring other variables and converting the strings from the form to floats
  $hours = floatval($_POST["number-of-hours"]);
  $rate = floatval($_POST["hourly-rate"]);
  $total = $hours * $rate;
  //number_format($number, $numberOfDecimals) rounds off decimals
  $tax = number_format($total * TAX_RATE, 2);
  $pay = number_format($total - $tax, 2);
?>

Your pay will be $<?php echo "$pay" ?>. <br>The government will take $<?php echo "$tax" ?>.