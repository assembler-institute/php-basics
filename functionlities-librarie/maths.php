<?php
//  ========  ABSOLUTE VALUE ==========

// The absolute value of num. If the argument num is of type float, the return type is also float, otherwise it is int (as float usually has a bigger value range than int).

echo abs(-4.2); // 4.2 (double/float)
echo '<br>';
echo abs(5);    // 5 (integer)
echo '<br>';
echo abs(-5);   // 5 (integer)
echo '<br>';

//======= ROUNDED VALUE  ========

//   Description ¶
// round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
// Returns the rounded value of num to specified precision (number of digits after the decimal point). precision can also be negative or zero (default).

// Parameters ¶
// num
// The value to round.

// precision
// The optional number of decimal digits to round to.

// If the precision is positive, num is rounded to precision significant digits after the decimal point.

// If the precision is negative, num is rounded to precision significant digits before the decimal point, i.e. to the nearest multiple of pow(10, -precision), e.g. for a precision of -1 num is rounded to tens, for a precision of -2 to hundreds, etc.

// mode
// Use one of the following constants to specify the mode in which rounding occurs.

// Constants	Description
// PHP_ROUND_HALF_UP	Rounds num away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2.
// PHP_ROUND_HALF_DOWN	Rounds num towards zero when it is half way there, making 1.5 into 1 and -1.5 into -1.
// PHP_ROUND_HALF_EVEN	Rounds num towards the nearest even value when it is half way there, making both 1.5 and 2.5 into 2.
// PHP_ROUND_HALF_ODD	Rounds num towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3.

$roun1 = round(0.60);   // 1
var_dump($roun1);
echo '<br>';
$roun2 = round(0.50);  // 1
var_dump($roun2);
echo '<br>';
$roun3 = round(0.49);  //  0
var_dump($roun3);
echo '<br>';
$roun4 = round(-4.40);  // -4
var_dump($roun4);
echo '<br>';
$roun5 = round(-4.60);  // -5
var_dump($roun5);
echo '<br>';

$roun6 = round(1.5,0,PHP_ROUND_HALF_UP);     //  2
var_dump($roun6);
echo '<br>';
$roun7 = round(-1.5,0,PHP_ROUND_HALF_UP);  // -2
var_dump($roun7);
echo '<br>';

$roun8 = round(1.5,0,PHP_ROUND_HALF_DOWN);  //  1
var_dump($roun8);
echo '<br>';
$roun9 = round(-1.5,0,PHP_ROUND_HALF_DOWN);  // -1
var_dump($roun9);
echo '<br>';

$roun10 = round(1.5,0,PHP_ROUND_HALF_EVEN);   //  2
var_dump($roun10);
echo '<br>';
$roun11 = round(-1.5,0,PHP_ROUND_HALF_EVEN);  //  -2
var_dump($roun11);
echo '<br>';

$roun12 = round(1.5,0,PHP_ROUND_HALF_ODD);  //  1
var_dump($roun12);
echo '<br>';
$roun13 = round(-1.5,0,PHP_ROUND_HALF_ODD);  //  -1
var_dump($roun13);
echo '<br>';


// ==========  HIGHEST VALUE =======

$maxVal = max(22,14,68,18,15);
var_dump($maxVal);                   // int(68)
echo '<br>';

// ==========  LOWEST VALUE =======

$minVal = min(22,14,68,18,15);
var_dump($minVal);                //  int(14)
echo '<br>';
  
// ==========  RANDOM VALUE =======
echo '<br>';
$randVal = rand();
var_dump($randVal);       //  int(512549293)
echo '<br>';
$randVal2 = rand();
var_dump($randVal2);      //  int(1132363175)
echo '<br>';
$randVal3 = rand(10,100);
var_dump($randVal3);       //  int(79)
echo '<br>';

?>