<?php
print "<h1>Functions</h1>";

function sum($val1, $val2)
{
  return $val1 + $val2;
}

echo "<h3>Function with 2 parameters and return the sum of them:</h3> ";
echo '<pre>';
print_r("function sum(\$val1, \$val2){
  return  \$val1 + \$val2;
}");
echo '</pre>';
echo "2 + 5 = ", sum(2, 5);
print "<br />";
print "<br />";

function substract($val1, $val2)
{
  return $val1 - $val2;
}

echo "<h3>Function with 2 parameters and return the substract of them:</h3> ";
echo '<pre>';
print_r("function substract(\$val1, \$val2){
  return  \$val1 - \$val2;
}");
echo '</pre>';
echo "5 - 2 = ", substract(5, 2);
print "<br />";
print "<br />";


function multiply($val1, $val2)
{
  return $val1 * $val2;
}

echo "<h3>Function with 2 parameters and return the multiplication of them:</h3> ";
echo '<pre>';
print_r("function multiply(\$val1, \$val2){
  return  \$val1 * \$val2;
}");
echo '</pre>';
echo "2 * 5 = ", multiply(2, 5);
print "<br />";
print "<br />";

function divide($val1, $val2)
{
  return $val1 / $val2;
}

echo "<h3>Function with 2 parameters and return the division of them:</h3> ";
echo '<pre>';
print_r("function divide(\$val1, \$val2){
  return  \$val1 / \$val2;
}");
echo '</pre>';
echo "20 / 5 = ", divide(20, 5);
print "<br />";
print "<br />";

function operate($val1, $val2, $operation)
{
  switch ($operation) {
    case "+":
      return sum($val1, $val2);
      break;
    case "-":
      return substract($val1, $val2);
      break;
    case "*":
      return multiply($val1, $val2);
      break;
    case "/":
      return divide($val1, $val2);
      break;  
    }
}

echo "<h3>Function with 3 parameters, 2 numbers and the operation.</h3> ";
echo '<pre>';
print_r("function operate(\$val1, \$val2, \$operation){
  return  \$val1 / \$val2;
}");
echo '</pre>';
echo "<p>100 / 5 = ", operate(100, 5, "/"), "</p>";
echo "<p>100 + 5 = ", operate(100, 5, "+"), "</p>";
echo "<p>100 - 5 = ", operate(100, 5, "-"), "</p>";
echo "<p>100 * 5 = ", operate(100, 5, "*"), "</p>";
print "<br />";
print "<br />";
