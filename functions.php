<?php
//Create a function that given two numbers returns the sum of both
function sum($num1, $num2)
{
    return $num1 + $num2;
}
echo sum(2, 3);



echo "<br><br><br><br>";

//Create a function that given two numbers returns the multiplication of both
function multiplication($num1, $num2)
{
    return $num1 * $num2;
}
echo multiplication(2, 3);

echo "<br><br><br><br>";
//Create a function that given two numbers returns the division of both
function divide($num1, $num2)
{
    return $num1 / $num2;
}
echo divide(9, 3);


echo "<br><br><br><br>";

//Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function math($operator, $num1, $num2)
{
    switch ($operator) {
        case '+':
            return  sum($num1, $num2);
            break;
        case '*':
            return  multiplication($num1, $num2);
            break;
        case '/':
            return divide($num1, $num2);
            break;
    }
}

echo math("*" , 2 ,10);