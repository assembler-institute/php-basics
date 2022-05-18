<?php

echo("<h1>Functions on PHP</h1>");

echo("<h2>Function that given two numbers returns the sum of both</h2>");
function sum($num1,$num2){
    return $num1 + $num2;
}
echo sum (4,7);
echo("<hr>");

echo("<h2>Function that given two numbers returns the multiplication of both</h2>");
function multiplication($num1,$num2){
    return $num1 * $num2;
}
echo multiplication(3,3);
echo("<hr>");

echo("<h2>Function that given two numbers returns the division of both</h2>");
function division($num1,$num2){
    return $num1 / $num2;
}
echo division(10,2);
echo("<hr>");

echo("<h2>function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation</h2>");
function operation($num1,$num2,$operator){
    if ($operator == '+'){
        return $num1+$num2;
    }else if ($operator == '-'){
        return $num1-$num2;
    }else if ($operator == '*'){
        return $num1*$num2;
    }else if ($operator == '/'){
        return $num1/$num2;
    }else{
        $error = "Error!, Please introduce a correct operator";
        return $error; 
    }
};
echo operation(2,4,"*");
?>