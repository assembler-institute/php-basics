<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions PHP</title>
</head>

<body>

    <div>
        <h2>Create a function that given two numbers returns the sum of both</h2>
        <p>
            <?php
            function add($num1, $num2)
            {
                $result = $num1 + $num2;
                echo $result;
            }
            add(20, 5);
            ?>

        </p>
    </div>

    <div>
        <h2>Create a function that given two numbers returns the multiplication of both</h2>
        <p>
            <?php
            function multiply($num1, $num2)
            {
                $result = $num1 * $num2;
                echo $result;
            }
            multiply(20, 5);
            ?>

        </p>
    </div>

    <div>
        <h2>Create a function that given two numbers returns the division of both</h2>
        <p>
            <?php
            function division($num1, $num2)
            {
                $result = $num1 / $num2;
                echo $result;
            }
            division(20, 5);
            ?>

        </p>
    </div>

    <div>
        <h2>Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.</h2>
        <p>
            <?php
            function operation($num1, $num2, $operator)
            {
                switch ($operator) {
                    case 'add':
                        $result = $num1 + $num2;
                        echo $result;
                        break;

                    case 'multiply':
                        $result = $num1 * $num2;
                        echo $result;
                        break;

                    case 'divide':
                        $result = $num1 / $num2;
                        echo $result;
                        break;

                    default:
                        echo "only add, multiply or divide";
                        break;
                }
            }
            operation(20, 5, "divide");
            ?>
        </p>
    </div>


</body>

</html>