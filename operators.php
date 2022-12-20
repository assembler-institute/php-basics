<?php

function sumar($val1, $val2)
{
  print "<h2>Arithmetic Operators</h2>";
  print "<h3>Add</h3>";
  $result = $val1 + $val2;
  echo "<p>", $val1, " + ", $val2, "</p>";
  echo "<p>The result is: <b>$result</b></p>";
  return var_dump($result);
}

function restar($val1, $val2)
{
  print "<h3>Substract</h3>";
  $result = $val1 - $val2;
  echo "<p>", $val1, " - ", $val2, "</p>";
  echo "<p>The result is: <b>$result</b></p>";
  return var_dump($result);
}

function multiplicar($val1, $val2)
{
  print "<h3>Multiply</h3>";
  $result = $val1 * $val2;
  echo "<p>", $val1, " *", $val2, "</p>";

  echo "<p>The result is: <b>$result</b></p>";
  return var_dump($result);
}

function dividir($val1, $val2)
{
  print "<h3>Divide</h3>";
  $result = $val1 / $val2;
  echo "<p>", $val1, " / ", $val2, "</p>";

  echo "<p>The result is: <b>$result</b></p>";
  return var_dump($result);
}

function percent($val1)
{
  print "<h3>Module</h3>";
  $result = $val1 % 2 === 0;
  echo "<p>", $val1, " % ", 2, "</p>";

  if ($result) {
    echo "<p>The number is <b>pair</b></p>";
    return var_dump($result);
  } else {
    echo "<p>The number is <b>not pair</b></p>";
    return var_dump($result);
  }
}

sumar(2, 3);
restar(5, 2);
multiplicar(2, 3);
dividir(10, 5);
percent(13);
print "<h2>Comparison Operators</h2>";
function compare($val1, $val2)
{

  if ($val1 <= $val2) {
    if ($val1 < $val2) {
      echo "<p><b>$val1</b> is lower than <b>$val2</b></p>";
    } else if ($val1 == $val2) {
      echo "<p><b>$val1</b> is equal than <b>$val2</b></p>";
    }
  } else if ($val1 > $val2) {
    echo "<p><b>$val1</b> is higher than <b>$val2</b></p>";
  }
}

compare(2, 3);
compare(7, 3);
compare(3, 3);

print "<h2>Logical Operators</h2>";

function logical($val1, $val2)
{
  if ($val1 && $val2) {
    return "First value: <b>$val1</b> and second value: <b>$val2</b> - <b>AND &&</b>";
  } else if ($val1 || $val2) {
        return "First value: <b>$val1</b> and second value: <b>$val2</b> - <b>Or ||</b>";
  } else if (!$val1) {
    echo var_dump($val1), " - <b>Not !</b>";

  }
}

function exclusiveOr($val1, $val2)
{
  if ($val1 xor $val2) return "<b>true</b> is xor";
  else return "<b>false</b> isn't xor";
}

echo logical(true, true), "<br />";
echo logical(false, true),  "<br />";
echo logical(false, null),  "<br />";
echo "Exclusive Or -> ", exclusiveOr(false, false);
