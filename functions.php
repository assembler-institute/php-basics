<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        function add($a, $b)
        {
            $add = $a + $b;
            echo $add;
        }
        ?>
    </div>
    <div>
        <?php
        function multiply($a, $b)
        {
            $multiply = $a * $b;
            echo $multiply;
        }
        ?>
    </div>
    <div>
        <?php
        function divide($a, $b)
        {
            $divide = $a / $b;
            echo $divide;
        }
        ?>
    </div>

    <div>
        <?php
        function selectOperation($a, $b, $operator)
        {
            switch ($operator) {
                case "add":
                    add($a, $b);
                    break;
                case "multiply":
                    multiply($a, $b);
                    break;
                case "divide":
                    divide($a, $b);
                    break;
            }
        }
        // selectOperation();
        ?>
    </div>
</body>

</html>