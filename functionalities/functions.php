<?php
//Create a function that given two numbers returns the sum of both
function sum($a,$b){
    return $a+$b;
}
print_r("Sum ".sum(5,6).nl2br("\n"));

//Create a function that given two numbers returns the multiplication of both
function multiplication($a,$b){
    return $a*$b;
}
print_r("Mult ".multiplication(5.5, 30).nl2br("\n"));

//Create a function that given two numbers returns the division of both
function division($a, $b){
    return $a/$b;
}
print_r("Div ".division(30,5).nl2br("\n"));

//Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function randomOp($a, $b, $rand){
    switch($rand){
        case 0:
            print_r("Mult: ".multiplication($a,$b).nl2br("\n"));
            break;
        case 1:
            print_r("Div: ".division($a,$b).nl2br("\n"));
            break;
        case 2:
            print_r("Sum: ".sum($a,$b).nl2br("\n"));
            break;
    }
}
randomOp(50,3,rand(0,2));

//Depending on the type of operation received by parameter, 
//the function will execute the function responsible for performing the operation,
//since you have previously implemented the function for each operation separately
function randomOperation($a, $b, $op){
    switch($op){
        case "*":
            print_r("Mult: ".multiplication($a,$b).nl2br("\n"));
            break;
        case "/":
            print_r("Div: ".division($a,$b).nl2br("\n"));
            break;
        case "+":
            print_r("Sum: ".sum($a,$b).nl2br("\n"));
            break;
    }
}
$arrOperation = array("*","/","+");
randomOperation(20,45,$arrOperation[rand(0,2)]);
?>
