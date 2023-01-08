<?php

# boolean
$booleant = true;
$booleanf = false;
var_dump($booleant);
var_dump($booleanf);
echo '<br><br>';

# integer
$integer = 1;
var_dump($integer);
echo '<br><br>';

# float
$float = '123.321';
var_dump(floatval($float));
echo '<br><br>';

# string
$string = 'string';
var_dump($string);
echo '<br><br>';

# array
$array = array('apple', 'melon', 'grape');
var_dump($array);
echo '<br><br>';

# object
$object = (object)['color1' => 'red', 'color2' => 'blue', 'color3' => 'green'];
var_dump($object);
echo '<br><br>';

# null
$null = null;
var_dump($null);
echo '<br><br>';

?>