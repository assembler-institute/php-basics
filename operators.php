<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 2em;
    }

    h2 {
        color: #18978F;
    }

    h3 {
        color: #DF7861;
    }
</style>
<?php

echo "<h2>Arithmetic Operators</h2>";
echo "<p>var_dump(3 + 2) = <b>";
var_dump(3 + 2);
echo "</b>;</p>";

echo "<p>var_dump(3 - 2) = <b>";
var_dump(3 - 2);
echo "</b>;</p>";

echo "<p>var_dump(3 * 2) = <b>";
var_dump(3 * 2);
echo "</b>;</p>";

echo "<p>var_dump(3 / 2) = <b>";
var_dump(3 / 2);
echo "</b>;</p>";

echo "<p>var_dump(3 % 2) = <b>";
var_dump(3 % 2);
echo "</b>;</p>";

echo "<br><h2>Comparison Operators</h2>";

echo "<p>var_dump(3 == 2) = <b>";
var_dump(3 == 2);
echo "</b>;</p>";

echo "<p>var_dump(3 != 2) = <b>";
var_dump(3 != 2);
echo "</b>;</p>";

echo "<p>var_dump(3 < 2) = <b>";
var_dump(3 < 2);
echo "</b>;</p>";

echo "<p>var_dump(3 > 2) = <b>";
var_dump(3 > 2);
echo "</b>;</p>";

echo "<p>var_dump(3 <= 2) = <b>";
var_dump(3 <= 2);
echo "</b>;</p>";

echo "<p>var_dump(3 >= 2) = <b>";
var_dump(3 >= 2);
echo "</b>;</p>";

echo "<br><h2>Logical Operators</h2>";

echo "<h3>&& / and:</h3>";

echo "<h4>&dollar;a = 3 > 2 && 2 > 2;</h4>";
echo "<h4>&dollar;b = 3 > 2 and 2 > 2;</h4>";

$a = 3 > 2 && 2 > 2;
$b = 3 > 2 and 2 > 2;

echo "<p>var_dump(&dollar;a) = <b>";
var_dump($a);
echo "</b>;</p>";

echo "<p>var_dump(&dollar;b) = <b>";
var_dump($b);
echo "</b>;</p>";

echo "<h3>|| / or:</h3>";

echo "<h4>&dollar;c = 2 > 2 || 3 > 2;</h4>";
echo "<h4>&dollar;d = 2 > 2 or 3 > 2;</h4>";

$c = 2 > 2 || 3 > 2;
$d = 2 > 2 or 3 > 2;

echo "<p>var_dump(&dollar;a) = <b>";
var_dump($c);
echo "</b>;</p>";

echo "<p>var_dump(&dollar;b) = <b>";
var_dump($d);
echo "</b>;</p>";

echo "<h3>!(NOT):</h3>";

echo "<h4>&dollar;e = 3 > 2;</h4>";
echo "<h4>&dollar;f = 2 > 2;</h4>";

$e = 3 > 2;
$f = 2 > 2;

echo "<p>var_dump(!&dollar;e) = <b>";
var_dump(!$e);
echo "</b>;</p>";

echo "<p>var_dump(!&dollar;f) = <b>";
var_dump(!$f);
echo "</b>;</p>";

echo "<h3>Xor:</h3>";

echo "<h4>&dollar;g = 5 > 3;</h4>";
echo "<h4>&dollar;h = 4 > 3;</h4>";
echo "<h4>&dollar;i = 4 > 5;</h4>";

$g = 5 > 3;
$h = 4 > 3;
$i = 4 > 5;


echo "<p>var_dump(&dollar;g Xor &dollar;h) = <b>";
var_dump($g xor $h);
echo "</b>;</p>";

echo "<p>var_dump(&dollar;h Xor &dollar;i) = <b>";
var_dump($h xor $i);
echo "</b>;</p>";
