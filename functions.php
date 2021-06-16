<?php
// Addition function
echo "<p>Addition function<p>";

echo '<pre>
    $num1 = 4;
    $num2 = 6;

    function additionFunction($x, $y){
        echo $x + $y;
    }

    additionFunction($num1, $num2);
    </pre>

    <p>Result:</p>';

$num1 = 4;
$num2 = 6;

function additionFunction($x, $y){
    echo $x + $y;
}

additionFunction($num1, $num2);

// Multiplication function
echo "<p>Multiplication function<p>";

echo '<pre>
    $num1 = 5;
    $num2 = 3;

    function multiplicationFunction($x, $y){
        echo $x * $y;
    }

    multiplicationFunction($num1, $num2);
    </pre>

    <p>Result:</p>';

$num1 = 5;
$num2 = 3;

function multiplicationFunction($x, $y){
    echo $x * $y;
}

multiplicationFunction($num1, $num2);

// Division function
echo "<p>Division function<p>";

echo '<pre>
    $num1 = 5;
    $num2 = 3;

    function multiplicationFunction($x, $y){
        echo $x * $y;
    }

    multiplicationFunction($num1, $num2);
    </pre>

    <p>Result:</p>';

$num1 = 24;
$num2 = 2;

function divisionFunction($x, $y){
    echo $x / $y;
}

divisionFunction($num1, $num2);

// Multiple operation function
echo "<p>Multiple operation function<p>";

echo '<pre>
    $num1 = 5;
    $num2 = 3;

    function multiplicationFunction($x, $y){
        echo $x * $y;
    }

    multiplicationFunction($num1, $num2);
    </pre>

    <p>Result:</p>';

$num1 = 30;
$num2 = 6;
$operation = "division";

function operationFunction($x, $y, $op){
    if ($op == "addition"){
        echo $x + $y;
    }
    elseif ($op == "multiplication"){
        echo $x * $y;
    }
    elseif ($op == "division"){
        echo $x / $y;
    } else {
        echo "Not a valid operation";
    }
}

operationFunction($num1, $num2, $operation);
?>