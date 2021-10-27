<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>
  <?php
  $arrStr = ["Hello", "world", "🌞"];
  echo var_dump($arrStr);
  echo "<br/>";

  $arrNum = [1, 4, 10.6];
  echo var_dump($arrNum);
  echo "<br/>";

  $arrMult = [1, 8, [9, 6, [7, 4]]];
  echo var_dump($arrMult);
  echo "<br/>";
  
  echo count($arrNum);
  echo "<br/>";

  $combined = array_merge($arrNum, $arrMult);
  echo var_dump($combined);
  echo "<br/>";

  echo end($arrStr);
  echo "<br/>";

  array_push($arrStr, "🌛");
  echo var_dump($arrStr);
  echo "<br/>";
  ?>
</body>
</html>