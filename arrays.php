<?php

print "<h1>Arrays</h1>";

echo "Strings array: ";
echo '<pre>';
print_r(["str1", "str2", "str3", "str4", "str5"]);
echo '</pre>';
print "<br />";

echo "Decimal and whole numbers array: ";
echo '<pre>';
print_r([1, 2, 3, 4.5, 6.54, 4.356]);
echo '</pre>';
print "<br />";

echo "Multidimensional array: ";
echo '<pre>';
print_r([[1, 2, 3], [4, 5, 6]]);
echo '</pre>';
print "<br />";

print "<h2>Methods</h2>";
print "<h3>Length: count(array)</h3>";
$arrayLength = [1, 2, 3, 4, 5, 6];
echo '<pre>';
print_r($arrayLength);
echo '</pre>';
echo "Total length: <b>", count($arrayLength) , "</b>";

print "<h3>Join two arrays: array_combine(keys, values)</h3>";
$arrayNum = ["first","second", "third"];
$arrayStr = ["one", "two", "three"];
echo '<pre>';
print_r($arrayStr);
echo '</pre>';
echo '+ <pre>';
print_r($arrayNum);
echo '</pre>';


echo "Mix result: <b>";
echo '<pre>';
print_r(array_combine($arrayStr, $arrayNum));
echo '</pre></b>';

print "<h3>Last element: end(array)</h3>";
$lastArray = [1, 2, 3, 4, 5, "last"];
echo '<pre>';
print_r($lastArray);
echo '</pre>';
echo "Last element: <b>", end($lastArray) , "</b>";

print "<h3>Add element in the first position: array_unshift(array, values)</h3>";
$addArray = [1, 2, 3, 4, 5, 6];
echo '<pre>';
print_r($addArray);
echo '</pre>';
array_unshift($addArray, "first","second");
echo "Final array: <b>";
echo '<pre>';
print_r($addArray);
echo '</pre></b>';


print "<h3>Add element in the last position: array_push(array, value)</h3>";
$addArray = [1, 2, 3, 4, 5, 6];
echo '<pre>';
print_r($addArray);
echo '</pre>';
array_push($addArray, "lastElement");
echo "Final array: <b>";
echo '<pre>';
print_r($addArray);
echo '</pre></b>';


print "<h3>Remove element with key: unset(array[key])</h3>";
$removeArray = [1, 2, 3, 4, 5, 6];
echo '<pre>';
print_r($removeArray);
echo '</pre>';

unset($removeArray[2]);
echo "Final array: <b>";
echo '<pre>';
print_r($removeArray);
echo '</pre></b>';