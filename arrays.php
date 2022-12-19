<?php

// Array Strings
$arrayStr = array("Hello", "World", "!");

// Array Numbers
$arrayNum = array(1, 2, 3.5);

// Multidimensional array
$arrayMulti = array(["hello"], ["world"]);

// Array length
sizeof($arrayMulti);

// Array Combination
array_combine($arrayStr, $arrayNum);

// Last position of an array
end($arrayNum);

// Push elements to an array
array_push($arrayStr, "Argentina")