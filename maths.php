<?php
/* 
Define a variable whose value is the result of the function that returns an absolute value.
Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
Define a variable whose value is the result of the function that returns a random number
 */

$style = "style='font-family: helvetica;'";
$line = "style='border: 1px solid rgb(230,230,230);'";

print("<h3 $style> - - Mathematical functions</h3>");


//Define a variable whose value is the result of the function that returns an absolute value
print("<h5 $style>Snippet [ Absolute Value ] </h5>");

print("<pre style='font-size: 15px'>

absolute = abs(-6);
echo absolute;

</pre>");

print("<h5 $style>Output</h5>");

//CODE
$absolute = abs(-6);
echo "<p $style>$absolute</p>";

print("<hr $line/>");

//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer
print("<h5 $style>Snippet [ Rounded Value ] </h5>");

print("<pre style='font-size: 15px'>

rounded = ceil(7.7);
echo rounded

</pre>");

print("<h5 $style>Output</h5>");

//CODE
$rounded = ceil(7.7);
echo "<p $style>$rounded</p>";

print("<hr $line/>");

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
print("<h5 $style>Snippet [ Max Value ] </h5>");

print("<pre style='font-size: 15px'>
function maxValue(num1, num2)
{
    echo max(num1, num2);
}

maxValue(2, 5);

</pre>");

print("<h5 $style>Output</h5>");

//CODE
function maxValue($num1, $num2)
{
    echo "<p>" . max($num1, $num2) . "</p>";
}

maxValue(2, 5);

print("<hr $line/>");

//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
print("<h5 $style>Snippet [ Min Value ] </h5>");

print("<pre style='font-size: 15px'>
function minValue(num1, num2)
{
    echo min(num1, num2);
}

minValue(2, 5);

</pre>");

print("<h5 $style>Output</h5>");

//CODE
function minValue($num1, $num2)
{
    echo "<p>" . min($num1, $num2) . "</p>";
}

minValue(2, 5);

print("<hr $line/>");

//Define a variable whose value is the result of the function that returns a random number
print("<h5 $style>Snippet [ Min Value ] </h5>");

print("<pre style='font-size: 15px'>
random = rand();
echo random;
</pre>");

print("<h5 $style>Output</h5>");

//CODE

$random = rand();
echo "<p $style>$random</p>";

print("<hr $line/>");
