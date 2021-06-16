<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
    <h3>It generates a function that given two numbers returns the sum of both</h3>
    <pre>
        function sumTwo($first, $second) {
            return ($first + $second);
        }
        echo sumTwo(10,2);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        function sumTwo($first, $second)
        {
            return ($first + $second);
        }
        echo sumTwo(10, 2);
        ?>
    </i>
    </p>
    <p>
    <h3>It generates a function that given two numbers returns the multiplication of both
    </h3>
    <pre>
        function multTwo($first, $second) {
            return ($first * $second);
        }
        echo multTwo(10,2);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        function multTwo($first, $second)
        {
            return ($first * $second);
        }
        echo multTwo(10, 2);
        ?>
    </i>
    </p>
    <p>
    <h3>
        It generates a function that given two numbers returns the division of both
    </h3>
    <pre>
        function divTwo($first, $second)
        {
            return ($first / $second);
        }
        echo divTwo(10, 2);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        function divTwo($first, $second)
        {
            return ($first / $second);
        }
        echo divTwo(10, 2);
        ?>
    </i>
    </p>
    <p>
    <h3>
        It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
    </h3>
    <pre>
        function operationTwo($first, $second, $operation)
        {
            switch ($operation) {
                case '+':
                    return sumTwo($first, $second);
                    break;
                case '*':
                    return multTwo($first, $second);
                    break;
                case '/':
                    return divTwo($first, $second);
                    break;

                default:
                    break;
            }
        }
        echo operationTwo(10, 2, "+");
        echo operationTwo(10, 2, "*");
        echo operationTwo(10, 2, "/");
    </pre>
    <u>Results:</u>
    <i>
        <?php
        function operationTwo($first, $second, $operation)
        {
            switch ($operation) {
                case '+':
                    return sumTwo($first, $second);
                    break;
                case '*':
                    return multTwo($first, $second);
                    break;
                case '/':
                    return divTwo($first, $second);
                    break;

                default:
                    break;
            }
        }
        echo ("<br>");
        echo operationTwo(10, 2, "+");
        echo ("<br>");
        echo operationTwo(10, 2, "*");
        echo ("<br>");
        echo operationTwo(10, 2, "/");
        ?>
    </i>
    </p>
</body>

</html>