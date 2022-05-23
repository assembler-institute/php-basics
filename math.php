<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math</title>
</head>
<body>
  <h1>Math</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>

  <?php
  $absolute=abs(-10.5);
  echo $absolute;
  echo "<br/>";

  $toRound=round(-10.5);
  echo $toRound;
  echo "<br/>";

  $maximun=max(7, 9, 45);
  echo $maximun;
  echo "<br/>";

  $minimum=min(7, 9, 45);
  echo $minimum;
  echo "<br/>";

  $randomy= rand(1, 5000);
  echo $randomy;
  echo "<br/>";
  ?>
</body>
</html>