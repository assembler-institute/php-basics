<?php
/*
It generates a function that given two numbers returns the sum of both
It generates a function that given two numbers returns the multiplication of both
It generates a function that given two numbers returns the division of both
It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
Depending on the type of operation received by parameter, the function will execute the function responsible for performing the operation, since you have previously implemented the function for each operation separately.
 */

$style = "style='font-family: helvetica;'";
$line = "style='border: 1px solid rgb(230,230,230);'";

print("<h2 $style> - - Functions </h2>");

//It generates a function that given two numbers returns the sum of both
print("<h3 $style>Snippet [ Function sum two values ] </h3>");

print('<pre style="font-size: 15px">
function sum($x, $y)
{
    echo $x + $y;
}

sum(2, 4);
</pre>');

print("<h5 $style>Output</h5>");

function sum($x, $y)
{
    echo $x + $y;
}

sum(2, 4);

print("<hr $line />");

//It generates a function that given two numbers returns the multiplication of both
print("<h3 $style>Snippet [ Function multiply two values ] </h3>");

print('<pre style="font-size: 15px">
function mult($x, $y)
{
    echo $x + $y;
}

mult(2, 4);
</pre>');

print("<h5 $style>Output</h5>");

function mult($x, $y)
{
    echo $x * $y;
}

mult(2, 4);

print("<hr $line />");

//It generates a function that given two numbers returns the division of both
print("<h3 $style>Snippet [ Function division two values ] </h3>");

print('<pre style="font-size: 15px">
function div($x, $y)
{
    echo $x / $y;
}

div(2, 4);
</pre>');

print("<h5 $style>Output</h5>");

function div($x, $y)
{
    echo $x / $y;
}

div(2, 4);

print("<hr $line />");

//It generates a function that given two numbers returns the division of both
print("<h3 $style>Snippet [ Given two numbers and operator returns values ] </h3>");

print('<pre style="font-size: 15px">
function operation($x, $y, $operator)
{
    switch ($operator) {
        case "+":
            echo $x + $y;
            break;
        case "-":
            echo $x - $y;
            break;
        case "/":
            echo $x / $y;
            break;
        case "*":
            echo $x * $y;
            break;
        default:

            break;
    }
}

operation(2, 4, "+");
operation(2, 4, "/");
</pre>');

print("<h5 $style>Output</h5>");

function operation($x, $y, $operator)
{
    switch ($operator) {
        case '+':
            echo $x + $y;
            break;
        case '-':
            echo $x - $y;
            break;
        case '/':
            echo $x / $y;
            break;
        case '*':
            echo $x * $y;
            break;
        default:

            break;
    }
}

operation(2, 4, "+");
print("<br />");
operation(2, 4, "/");


print("<hr $line />");
