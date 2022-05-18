<?php

function sumOfNums($a,$b) { // sum numbers function
    echo $a + $b;
}


function multiplyOfNums($a,$b) { // multiply numbers function
  echo $a * $b;
}

function divisionOfNums($a,$b) { // division numbers function
  echo $a / $b;
}

function arithmeticOperation($a, $operand, $b) { //  artithmetic function
  switch ($operand) {;
    case '+':
      sumOfNums($a,$b);
      break;
    case '*':
      multiplyOfNums($a, $b);
      break;
    case '/':
      divisionOfNums($a, $b);
      break;
  }
}
