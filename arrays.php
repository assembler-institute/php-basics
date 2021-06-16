<?php
/*
Define a simple array composed of text strings
Define a simple array consisting of whole numbers and decimal numbers
Define a multidimensional array
Execute the function that allows to obtain the length of an array
Execute the function that allows to obtain the combination of two arrays
Execute the function that once is given an array return the last element of it
Execute the function that once is given an array add a new element to the array in question
 */

$style = "style='font-family: helvetica;'";
$line = "style='border: 1px solid rgb(230,230,230);'";

print("<h2 $style> - - Arrays </h2>");

//Define a simple array composed of text strings
print("<h3 $style>Snippet [ Simple Array ] </h3>");

print('<pre style="font-size: 15px">
$array = ["Apple", "Orange", "Carrot"];
var_dump($array);
</pre>');

print("<h5 $style>Output</h5>");

$array = ["Apple", "Orange", "Carrot"];
var_dump($array);

print("<hr $line />");

//Define a simple array consisting of whole numbers and decimal numbers
print("<h3 $style>Snippet [ Simple Array Numbers and Decimals ] </h3>");

print('<pre style="font-size: 15px">
$array = [1, 2, 2.4];
var_dump($array);
</pre>');

print("<h5 $style>Output</h5>");

$array = [1, 2, 2.4];
var_dump($array);

print("<hr $line />");

//Define a multidimensional array
print("<h3 $style>Snippet [ Multidimensional Array ] </h3>");

print('<pre style="font-size: 15px">
$numbers = [
    1, 2, 3,
    $floats = [1.2, 2.3, 4.7]
];
var_dump($numbers);
</pre>');

print("<h5 $style>Output</h5>");

$numbers = [
    1, 2, 3,
    $floats = [1.2, 2.3, 4.7]
];
var_dump($numbers);

print("<hr $line />");

//Execute the function that allows to obtain the length of an array
print("<h3 $style>Snippet [ Length Array ] </h3>");

print('<pre style="font-size: 15px">
$numbers = [
    1, 2, 3,
    $floats = [1.2, 2.3, 4.7]
];
echo sizeof($numbers);
</pre>');

print("<h5 $style>Output</h5>");

$numbers = [
    1, 2, 3,
    $floats = [1.2, 2.3, 4.7]
];
echo sizeof($numbers);

print("<hr $line />");

//Execute the function that allows to obtain the combination of two arrays
print("<h3 $style>Snippet [ Combination Array ] </h3>");

print('<pre style="font-size: 15px">
<b>array_merge()</b>

$numbers = [1, 2, 3,];
$more_numbers = [4, 5, 6];
$combined = array_merge($numbers, $more_numbers);

var_dump($combined);

<b>array_combine()</b>

$keys = ["one", "two", "three"];
$numbers = [1, 2, 3];
$combined = array_combine($keys, $numbers);

var_dump($combined);
</pre>');

print("<h5 $style>Output</h5>");

$numbers = [1, 2, 3,];
$more_numbers = [4, 5, 6];
$merged = array_merge($numbers, $more_numbers);

var_dump($merged);
print("<br />");

$keys = ["one", "two", "three"];
$numbers = [1, 2, 3];
$combined = array_combine($keys, $numbers);

var_dump($combined);


print("<hr $line />");

//Execute the function that once is given an array return the last element of it
print("<h3 $style>Snippet [ Array return the last element ] </h3>");

print('<pre style="font-size: 15px">
$numbers = [1, 2, 3];
echo end($numbers);
</pre>');

print("<h5 $style>Output</h5>");

$numbers = [1, 2, 3];
echo end($numbers);

print("<hr $line />");

//Execute the function that once is given an array add a new element to the array in question
print("<h3 $style>Snippet [ Array return the last element ] </h3>");

print('<pre style="font-size: 15px">
$numbers = [1, 2, 3];
array_push($numbers, 4, 5);
var_dump($numbers);
</pre>');

print("<h5 $style>Output</h5>");

$numbers = [1, 2, 3];
array_push($numbers, 4, 5);
var_dump($numbers);

print("<hr $line />");
