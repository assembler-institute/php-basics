<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Functions</title>
</head>

<body>
    <h1>Functions</h1>
    <?php

    // It generates a function that given two numbers returns the sum of both
    echo "<h2>Adding</h2>";
    echo '<pre>
    function adding($n1, $n2) {
        return $n1 + $n2;
    }

    adding(4, 5);
    </pre>';
    echo "<strong>Result: </strong>";
    function adding($n1, $n2)
    {
        return $n1 + $n2;
    }
    echo adding(4, 5);

    // It generates a function that given two numbers returns the multiplication of both
    echo "<h2>Multiplying</h2>";
    echo '<pre>
    function multiply($n1, $n2) {
        return $n1 * $n2;
    }
    
    multiply(3, 5);
    </pre>';
    echo "<strong>Result: </strong>";
    function multiply($n1, $n2)
    {
        return $n1 * $n2;
    }
    echo multiply(3, 5);

    // It generates a function that given two numbers returns the division of both
    echo "<h2>Dividing</h2>";
    echo '<pre>
    function divide($n1, $n2) {
        return $n1 / $n2;
    }
    
    divide(12, 3);
    </pre>';
    echo "<strong>Result: </strong>";
    function divide($n1, $n2)
    {
        return $n1 / $n2;
    }
    echo divide(12, 3);

    // It generates a function that, given two numbers and an operation (add, multiply or divide),
    // returns the result of that operation.
    echo "<h2>Operations</h2>";
    echo '<pre>
    function operations($n1, $n2, $op) {
        switch ($op) {
            case "*":
                return $n1 * $n2;
                break;
            case "/":
                return $n1 / $n2;
                break;
            case "+":
                return $n1 + $n2;
        }
    }
    operations(7, 2, "*")";
    operations(10, 5, "/");
    </pre>';
    echo "<strong>Result: </strong><br/>";
    function operations($n1, $n2, $op)
    {
        switch ($op) {
            case "*":
                return $n1 * $n2;
                break;
            case "/":
                return $n1 / $n2;
                break;
            case "+":
                return $n1 + $n2;
        }
    }
    echo operations(7, 2, "*") . "<br/>";
    echo operations(10, 5, "/");

    ?>
</body>

</html>