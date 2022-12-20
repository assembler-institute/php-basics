<?php 
echo '<strong>results</strong><br><br>';

echo "var_dump() to check value type and value";
echo "<br>";

var_dump('Hello');
echo "<br>";
var_dump(3);
echo "<br>";
var_dump(['Hello', 'World']);
echo "<br>";
var_dump((object) array('1' => 'Hello', '2' => 'World'));
echo "<br>";
var_dump(false);
echo "<br>";
var_dump(2.5);
echo "<br>";
var_dump(null);
echo "<br>";

$a = 1;
$b = 2;

echo "<br>";
echo "var_dump() to check arithmetic operators";
echo "<br>";

var_dump($a + $b == 2);
echo "<br>";
var_dump($a - $b == -1);
echo "<br>";
var_dump($a * $b == 2);
echo "<br>";
var_dump($a / $b == 2);
echo "<br>";
var_dump($a % $b == 0);
echo "<br>";

echo "<br>";
echo "var_dump() to check comparision operators";
echo "<br>";

var_dump($a < $b);
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";

echo "<br>";
echo "var_dump() to check logical operators";
echo "<br>";

var_dump($a < $b && $a == 1);
echo "<br>";
var_dump($a > $b || $a == 2);
echo "<br>";
var_dump(!($a == $b));
echo "<br>";
var_dump(!($a == 1 xor $b == 2));
echo "<br>";

echo '<h1>Operators</h1>
<pre>

echo "var_dump() to check value type and value";
echo "<br>";

var_dump("Hello");
echo "<br>";
var_dump(3);
echo "<br>";
var_dump(["Hello", "World"]);
echo "<br>";
var_dump((object) array("1" => "Hello", "2" => "World"));
echo "<br>";
var_dump(false);
echo "<br>";
var_dump(2.5);
echo "<br>";
var_dump(null);
echo "<br>";

$a = 1;
$b = 2;

echo "<br>";
echo "var_dump() to check arithmetic operators";
echo "<br>";

var_dump($a + $b == 2);
echo "<br>";
var_dump($a - $b == -1);
echo "<br>";
var_dump($a * $b == 2);
echo "<br>";
var_dump($a / $b == 2);
echo "<br>";
var_dump($a % $b == 0);
echo "<br>";

echo "<br>";
echo "var_dump() to check comparision operators";
echo "<br>";

var_dump($a < $b);
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";

echo "<br>";
echo "var_dump() to check logical operators";
echo "<br>";

var_dump($a < $b && $a == 1);
echo "<br>";
var_dump($a > $b || $a == 2);
echo "<br>";
var_dump(!($a == $b));
echo "<br>";
var_dump(!($a == 1 xor $b == 2));
echo "<br>";


</pre>

'

?>