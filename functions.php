<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Create a function that given two numbers returns the sum of both
        function sum($a,$b){
            return $a+$b;
        }
        echo "<h2>Sum function</h2>";
        echo "4+5= ",sum(4,5);
        //Create a function that given two numbers returns the multiplication of both
        function multiply($a,$b) {
            return $a*$b;
        }
        echo "<h2>Multiply function</h2>";
        echo "2*3= ",multiply(2,3);
        //Create a function that given two numbers returns the division of both
        function divide($a,$b){
            return $a/$b;
        }
        echo "<h2>Divide function</h2>";
        echo "6/2= ", divide(6,2);
        //Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
        function multiOperation($a,$b,$operator){
            switch($operator){
                case "+": 
                    return sum($a,$b);
                    break;
                case "*":
                    return multiply($a,$b);
                    break;
                case "/":
                    return divide($a,$b);
                    break;
            }
        }
        echo "<h2>Multioperation</h2>";
        echo "6+2 = ", multiOperation(6,2,"+"),"<br>";
        echo "4/2 = ", multiOperation(4,2,"/"),"<br>";
        echo "5*2 = ", multiOperation(5,2,"*");
    ?>
</body>
</html>