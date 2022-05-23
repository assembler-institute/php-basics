<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators</title>
</head>
<body>
  <?php

  $a = 2;
  $b = 4;
  $c = 5;
  $d = 10;

//ARITHMETIC
print "ARITHMETIC";
echo var_dump($a + $b);
echo var_dump($a - $b);
echo var_dump($a * $b);
echo var_dump($a / $b);
echo var_dump($a % $b);

//COMPARISON
print "COMPARISON"; 
echo var_dump($a == $b);
echo var_dump($a != $b);
echo var_dump($a > $b);
echo var_dump($a < $b);
echo var_dump($a >= $b);
echo var_dump($a <= $b);

//LOGICAL 
print "LOGICAL"; 
echo var_dump($a && $b);
echo var_dump($a || $b);
echo var_dump(!$a);
echo var_dump($a Or $b);
echo var_dump($a xor $b);

  ?>
</body>
</html>