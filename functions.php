<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Functions</title>
</head>

<body>
  <?php
  require './globals.php';

  echo '<h2>functions.php</h2>';

  hr();

  // Create a function that given two numbers returns the sum of both
  echo '<h4>Create a function that given two numbers returns the sum of both</h4>';
  function sum($a, $b)
  {
    echo $a . ' + ' . $b . " = " . $a + $b;
  }
  echo '
<pre>
function sum($a, $b){
  $x = $a;
  $y = $b;
  echo $a." + ".$b." = ". $a + $b;
}
sum(66, 99);
</pre> ==> ';
  sum(66, 99);

  hr();

  // Create a function that given two numbers returns the multiplication of both
  echo '<h4>Create a function that given two numbers returns the multiplication of both</h4>';
  echo '
<pre>
function multiplication($a, $b) {
  echo $a . " + " . $b . " = " . $a * $b;
}
multiplication(23, 17);
</pre> ==> ';
  function multiplication($a, $b)
  {
    echo $a . ' + ' . $b . " = " . $a * $b;
  }
  multiplication(23, 17);

  hr();

  // Create a function that given two numbers returns the division of both
  echo '<h4>Create a function that given two numbers returns the division of both</h4>';
  echo '
<pre>
function division($a, $b) {
  echo $a . " + " . $b . " = " . $a / $b;
}
division(23, 17);
</pre> ==> ';
  function division($a, $b)
  {
    echo $a . ' + ' . $b . " = " . $a / $b;
  }
  division(100, 2);

  hr();

  // Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
  echo '<h4>Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.</h4>';
  echo '
<pre>
function calc($a, $b, $operation) {
  switch ($operation) {
    case "add":
      echo $a . " + " . $b . " = " . $a + $b;
      break;
    case "multiply":
      echo $a . " + " . $b . " = " . $a * $b;
      break;
    case "divide":
      echo $a . " + " . $b . " = " . $a / $b;
      break;
    default:
      echo "Invalid parameter";
  }
}
calc(20, 200, "add");
</pre> ==> ';
  function calculate($a, $b, $operation)
  {
    switch ($operation) {
      case 'add':
        echo $a . ' + ' . $b . " = " . $a + $b;
        break;
      case 'multiply':
        echo $a . ' + ' . $b . " = " . $a * $b;
        break;
      case 'divide':
        echo $a . ' + ' . $b . " = " . $a / $b;
        break;
      default:
        echo 'Invalid parameter';
    }
  }
  calculate(20, 200, 'add');

  ?>
</body>

</html>