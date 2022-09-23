<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions.php</title>
</head>
<body>
    <h1>Functions</h1>
    
    <?php

    function sum($num1, $num2) {
        echo $num1 + $num2;
    }
    sum(5, 2);

    echo ("<br/>");

    function mult($num1, $num2) {
        echo $num1 * $num2;
    }
    mult(7, 5);

    echo ("<br/>");

    function divs($num1, $num2) {
        echo $num1 / $num2;
    }
    divs(10, 5);

    echo ("<br/>");

    function operation($n1, $n2, $ops) {
        
        if ($ops == "+") {
            return $n1 + $n2;
        }elseif ($ops == "*") {
            return $n1 * $n2;
        }else if ($ops == "/") {
            return $n1 / $n2;
        }
    }
    
    echo operation(2, 3, "*");

    ?>


</body>
</html>