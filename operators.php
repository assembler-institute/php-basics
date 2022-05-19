<?php

// Operators in PHP


// Arithmetic Operators

// +
$a = 3;
$b = 4;
$ansAdd = $a + $b;
echo "$a + $b = $ansAdd";
echo '<br><br>';

// -
$a = 5;
$b = 10;
$ansSubtract = $a - $b;
echo "$a - $b = $ansSubtract";

echo '<br><br>';

// /  * 
$a = 6;
$b = 8;
$ansMultiply = $a * $b;
echo "$a * $b = $ansMultiply";

echo '<br><br>';

// /
$a = 180;
$b = 3;
$ansDivide = $a / $b;
echo "$a / $b = $ansDivide";

echo '<br><br>';

// %
$a = 13;
$b = 2;
$ansModulo = $a % $b;
echo "$a % $b = $ansModulo";

echo '<br><br>';



// Comparison Operators:


// ==
echo '<code>
var_dump(5 == ';
echo "'5');";
echo '</code><br>';
var_dump(5 == '5');

echo '<br><br>';

// ===
echo '<code>
var_dump(5 === ';
echo "'5');";
echo '</code><br>';
var_dump(5 === '5');

echo '<br><br>';

//  NOT !=
echo '<code>
var_dump(5 != ';
echo "'5');";
echo '</code><br>';
var_dump(5 != '5');

echo '<br><br>';

// STRICT NOt !==
echo "<h3>!==</h3>";
echo '<code>
var_dump(5 !== ';
echo "'5');";
echo '</code><br>';
var_dump(5 !== '5');

echo '<br><br>';

$a = 2;
$b = 3;

// <
echo '<code>
echo var_dump(2 < 3);</code><br>';
var_dump(2 < 3);

echo '<br><br>';

// >
echo '<code>
echo var_dump(2 > 3);</code><br>';
var_dump(2 > 3);

echo '<br><br>';

// <=
echo '<code>
echo var_dump(2 <= 2);<br></code>';
var_dump(2 <= 3);

echo '<br><br>';

// >=
echo '<code>
echo var_dump(2 >= 3);<br></code>';
var_dump(2 >= 3);

echo '<br><br>';

// Logical Operators:


// &&
$a = 1;
$b = 2;
echo '<code>var_dump($a > 1 && $b > 1);</code><br>';
var_dump($a > 1 && $b > 1);
echo '<br>';
if ($a > 1 && $b > 1) {
    echo 'both greater than 1';
} else {
    echo 'both not greater than 1';
}


echo '<br><br>';

// ||
echo '<code>var_dump($a > 1 || $b > 1);</code><br>';
var_dump($a > 1 || $b > 1);
echo '<br>';
if ($a > 1 || $b > 1) {
    echo 'at least one variable is greater than 1';
} else {
    echo 'neither variable is greater than 1';
}

echo '<br><br>';

// xor
echo '<code>var_dump($a > 1 xor $b > 1)</code><br>';
$a = 3;
var_dump($a > 1 xor $b > 1);
echo '<br>';
if ($a > 1 xor $b > 1) {
    echo 'one of the variables is greater than 1';
} else {
    echo 'both of the variables are greater than 1';
}

echo '<br><br>';

// / !
echo '<code>var_dump(!$q)</code><br>';
$q = 0;
var_dump(!$q);
echo '<br>';
if (!$q) {
    echo 'The variable is undefined or is equal to 0';
} else {
    echo "variable q is equal to $q";
}

