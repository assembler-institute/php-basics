<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function</title>
</head>
<body>
  <?php
  //Variables used!
echo var_dump($number1 = 10);
echo var_dump($number2 = 5);

// "Returns the sum of both number.";
function sumTwoNumbers(&$a, &$b){
echo $a + $b;
}
sumTwoNumbers($number1, $number2);

// "Returns the multiplication of both numbers.";
function mulTwoNumbers(&$a, &$b){
  echo $a * $b;
  }
mulTwoNumbers($number1, $number2);

//"Returns the division of both numbers.";
function divTwoNumbers(&$a, &$b){
  echo $a / $b;
  }
divTwoNumbers($number1, $number2);


//"Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.";
function selectOperator(&$a,&$b,&$operator){
switch($operator){
  case "*":
    mulTwoNumbers($a, $b2);
    break;
    case "/":
     divTwoNumbers($a, $b);
     break;
     case "+" :
      sumTwoNumbers($a,$b);
      break;
}
}
$operator = "+";
selectOperator($number1,$number2,$operator)
  ?>
</body>
</html>