<?php
echo "<h3>arithmetic operators</h3>";
echo '<pre>
var_dump(12 + 12 == 24);
var_dump(12 - 12 == 24);
var_dump(12 * 12 == 144);
var_dump(12 / 12 == 12);
var_dump(12 % 12 == 24);
</pre>';
var_dump(12 + 12 == 24);
echo "<br>";
var_dump(12 - 12 == 24);
echo "<br>";
var_dump(12 * 12 == 144);
echo "<br>";
var_dump(12 / 12 == 12);
echo "<br>";
var_dump(12 % 12 == 24);

echo "<h3>comparison operators</h3>";

echo '<pre>
var_dump(3==4);
var_dump(3!=4);
var_dump(3<4);
var_dump(3>4);
var_dump(3<=4);
var_dump(3>=4);
</pre>';

var_dump(3==4);
echo "<br>";
var_dump(3!=4);
echo "<br>";
var_dump(3<4);
echo "<br>";
var_dump(3>4);
echo "<br>";
var_dump(3<=4);
echo "<br>";
var_dump(3>=4);

echo "<h3>Logical operators</h3>";

var_dump(2 < 3 && 4 > 8);
var_dump(2 > 3 || 7 > 1);
var_dump(2 < 3 xor 4 > 8); #devuelve true solo si uno es true y el otro no lo es
var_dump(! 2!=3); # devuelve true si X no es true

?>