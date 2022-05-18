<?php

function add($num1, $num2){
    return $num1 + $num2;
}

print add(3,4);

echo "<br/>";

function multiplication($num1, $num2){
    return $num1 * $num2;
}

print multiplication(3, 6);

echo "<br/>";

function division($num1, $num2){
    return $num1 / $num2;
}

print division(4, 8);
echo "<br/>";

function operationFunction($operation, $num1, $num2){

    if($operation == 'add'){
        return add($num1, $num2);
    }

    if($operation == 'division'){
        return division($num1, $num2);
    }

    if($operation == 'multiplication'){
        return multiplication($num1, $num2);
    }

}

print operationFunction('division', 4, 6);

