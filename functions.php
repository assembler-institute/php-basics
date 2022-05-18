<?php

function sum($num1, $num2){
    return $num1 + $num2;
}

    print_r("The sum is: " . sum(5, 5) . "\n");

function mult($num1, $num2){
    return $num1 * $num2;
}

    print_r("The multiplication is: " . mult(5, 5) . "\n");

function div($num1, $num2){
    return $num1 / $num2;
}

    print_r("The division is: " . div(5, 5) . "\n");

function operation($operator, $num1, $num2){

    if($operator == "+"){
        return sum($num1, $num2);
    }

    if($operator == "/"){
        return div($num1, $num2);
    }

    if($operator == "*"){
        return mult($num1, $num2);
    }

}

    print_r("The operation is: " . operation("*", 5, 5) . "\n");
?>