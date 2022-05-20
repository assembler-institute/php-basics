<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <!--
    This file will be used to store your first tests regarding the implementation of functions:
        Create a function that given two numbers returns the sum of both
        Create a function that given two numbers returns the multiplication of both
        Create a function that given two numbers returns the division of both
        Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
    Depending on the type of operation received by parameter, the function will execute the function responsible for performing the operation, since you have previously implemented the function for each operation separately.
      -->
    <?php
    function sum($a, $b) {
        echo $a + $b;
    }
    sum(23, 9);
    echo '<br>'; 

    function mult($a, $b) {
        echo $a * $b;
    }
    mult(3, 2);
    echo '<br>';   

    function divs($a, $b) {
        echo $a / $b;
    }
    divs(6, 2);
    echo '<br>';    

    function op($a, $op, $b ){
        if ($op == "+") {
            return $a + $b;
        }elseif ($op == "*") {
            return $a * $b;
        }else if ($op == "/") {
            return $a / $b;
        }
    }
    echo op(2, '*', 9);

    ?>
</body>
</html>