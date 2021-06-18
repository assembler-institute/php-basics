<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// It generates a function that given two numbers returns the sum of both
function addNumbers(float $a, float $b)
{
    return $a + $b;
}
echo addNumbers(5, 3), '<br><br>';

// It generates a function that given two numbers returns the multiplication of both
function mulNumbers(float $a, float $b)
{
    return $a * $b;
}
echo mulNumbers(5, 3.33), '<br><br>';

// It generates a function that given two numbers returns the division of both
function divNumbers(float $a, float $b)
{
    return $a / $b;
}
echo divNumbers(15, 2.4), '<br><br>';

// It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function operateNumbers(float $a, float $b, string $operation)
{
    if ($operation == 'add') {
        return addNumbers($a, $b);
    } elseif ($operation == 'multiply') {
        return mulNumbers($a, $b);
    } elseif ($operation == 'divide') {
        return divNumbers($a, $b);
    } else {
        return 'No operation given';
    }
}
echo operateNumbers(15, 5.5, 'other');

require_once('../foot.php');
