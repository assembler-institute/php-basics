<?php

# Function that given two numbers returns the sum of both

echo("<i>Function that given two numbers returns the sum of both.  </i> <br>");
    

function sum($x, $y) {
    return $x + $y;
}
echo '<pre>'; print_r("function sum(x, y) {
    return x, y; <br>}"); echo '</pre>';
echo ("returned: " . sum(4, 6));

echo ("<hr>");

# Function that given two numbers returns the multiplication of both

echo("<i>Function that given two numbers returns the multiplication of both.  </i> <br>");
    

function multiplication($x, $y) {
    return $x * $y;
}
echo '<pre>'; print_r("function sum(x, y) {
    return x * y; <br>}"); echo '</pre>';
echo ("returned: " . multiplication(4, 6));

echo ("<hr>");

# Function that given two numbers returns the division of both


echo("<i>Function that given two numbers returns the division of both
.  </i> <br>");
    

function division($x, $y) {
    return $x * $y;
}
echo '<pre>'; print_r("function sum(x, y) {
    return x * y; <br>}"); echo '</pre>';
echo ("returned: " . division(4, 6));

echo ("<hr>");

# Function that given two numbers and an operation (add, multiply or divide), returns the result of that operation


echo("<i>Function that given two numbers and an operation (add, multiply or divide), returns the result of that operation. </i> <br>");

function xOperation($y, $x, $operation) {
    if ($operation === "+") {
      return $y + $x;
    }else if ($operation === "-") {
        return $y - $x;
    }else if ($operation === "*") {
        return $y * $x;
    }else if ($operation === "/") {
        return $y / $x;
    }else if ($operation === "%") {
        return $y % $x;
    }else if ($operation === "**") {
        return $y ** $x;
    }
    
}

echo '<pre>'; print_r("function operation() {
    if (operation = `+`) {
        return y + x;
      }else if (operation = `-`) {
          return y - x;
      }else if (operation = `*`) {
          return y * x;
      }else if (operation = `/`) {
          return y / x;
      }else if (operation = `%`) {
          return y % x;
      }else if (operation = `**`) {
          return y ** x;
      }
}"); echo '</pre>';

echo ("returned: " . xOperation(4, 5, "+"));

?>


