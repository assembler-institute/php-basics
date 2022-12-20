<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 2em;
    }

    h2 {
        margin-top: 2em;
        color: #18978F;
    }

    h4 {
        font-weight: bold;
        font-size: 16;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
</style>

<?php

echo "<h2>Sum</h2>";

echo '<pre><h4>
function sum($num1, $num2)
{
    return $num1 + $num2;
}

$resultSum = sum(4, 5);
</h4></pre>';

function sum($num1, $num2)
{
    return $num1 + $num2;
}

$resultSum = sum(4, 5);

echo $resultSum;

echo "<h2>Multiplication</h2>";

echo '<pre><h4>
function multiplication($num1, $num2)
{
    return $num1 * $num2;
}

$resultMultiplication = multiplication(4, 5);
</h4></pre>';

function multiplication($num1, $num2)
{
    return $num1 * $num2;
}

$resultMultiplication = multiplication(4, 5);

echo $resultMultiplication;


echo "<h2>Division</h2>";

echo '<pre><h4>
function division($num1, $num2)
{
    return $num1 / $num2;
}

$resultDivision = division(10, 5);
</h4></pre>';

function division($num1, $num2)
{
    return $num1 / $num2;
}

$resultDivision = division(10, 5);

echo $resultDivision;


echo "<h2>Operation</h2>";

echo '<pre><h4>
function operation($num1, $num2, $operator)
{
    if ($operator == "+") {
        return sum($num1, $num2);
    } elseif ($operator == "*") {
        return multiplication($num1, $num2);
    } else {
        return division($num1, $num2);
    }
}

$resultOperation = operation(4, 2, "/");
</h4></pre>';

function operation($num1, $num2, $operator)
{
    if ($operator == "+") {
        return sum($num1, $num2);
    } elseif ($operator == "*") {
        return multiplication($num1, $num2);
    } else {
        return division($num1, $num2);
    }
}

$resultOperation = operation(4, 2, "/");

echo $resultOperation;
