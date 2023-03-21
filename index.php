<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data section-->
    <meta charset="utf-8">
    <meta name="description" content="Salary, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title -->
    <title>Salary, with PHP</title>
  </head>
  <body>
 <?php 
      echo "<h1>Salary, with PHP</h1>";
      echo "<h3>Enter your information:</h3>";
    ?>

    <!-- Form for user input -->
    <form action="./results.php" method="post" target="result">
      <label for="hours">Number of hours</label>
      <input type="float" id="number-of-hours" placeholder="Number of hours..." name="number-of-hours"><br><br>
      <label for="rate">Hourly rate $</label>
      <input type="float" id="hourly-rate" placeholder="Hourly rate..." name="hourly-rate"><br><br>
      <input type="submit" value="Calculate">
    </form>

    <!-- Div for calculations -->
    <iframe id="result" name="result">
    </iframe>
  </body>
</html>