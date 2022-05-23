<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators</title>
</head>
<body>
  <h1>Operators</h1>
  <a href="/Assembler/Month6/php_basics/index.html">Home</a>
  <br/>
  <?php
  echo "<h2>Basics</h2> <br/>";

  function d($data){
    "<pre>";
    var_dump($data);
    "</pre>";
  }

  $result = 5 + 1 ** 1 - 10.5 *3 / 2 + 6%7;
  $equal = $result/1000;
  d($result);
  if ($equal===$result) {
    d($equal);
  };

  if($equal!==$result){
    d($equal);
  };

  if ($equal xor $result == -10.75) {
    echo "😁";
  };
  ?>
</body>
</html>