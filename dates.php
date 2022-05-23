<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dates</title>
</head>
<body>
  <h1>Dates</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>
  <?php


    $today = date("Y-m-d");
    print $today;

    echo "<br/>";

    $today = date("Ymd");
    echo $today;

    echo "<br/>";

    $day = date("d");
    echo $day;

    echo "<br/>";

    $month = date("m");
    echo $month;

    echo "<br/>";

    $min = date("h-i");
    echo $min;
  ?>
</body>
</html>