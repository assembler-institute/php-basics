<?php

//Create a function that given two numbers returns the sum of both
function sum($a, $b) {
    return $a + $b;
  }
  echo sum(2, 3);
  
//Create a function that given two numbers returns the multiplication of both
function multiplication($a, $b) {
    return $a * $b;
  }
  echo multiplication(2, 3);

//Create a function that given two numbers returns the division of both
function division($a, $b) {
    return $a / $b;
  }
  echo division(2, 3);

//Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation,
//Depending on the type of operation received by parameter, the function will execute the function responsible for performing the operation,
// since you have previously implemented the function for each operation separately.

function operation ($operation) {
    switch ( $operation) {
      case "add":
            echo sum(2, 3);
            
          break;
      case "multiply":
            echo multiplication(2, 3);
          break;
      case "divide":
        echo division(2, 3);
          break;
      default:
          return "You need to specify if you want to add, multiply or divide";
  };
  }
  echo operation("divide");

?>