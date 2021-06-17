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
    <h3>Create an example of use for arithmetic operators: +, -, *, /, and%</h3>
    <pre>
            var_dump(1 + 2);
            var_dump(6 - 2);
            var_dump(1 * 2);
            var_dump(4 / 3);
            var_dump(7 % 3);
        </pre>
    <u>Results:</u>
    <i>
        <?php
        echo ("<br>");
        var_dump(1 + 2);
        echo ("<br>");
        var_dump(6 - 2);
        echo ("<br>");
        var_dump(1 * 2);
        echo ("<br>");
        var_dump(4 / 3);
        echo ("<br>");
        var_dump(7 % 3);
        ?>
    </i>
    </p>
    <p>
    <h3>Create a usage example for comparison operators: ==,! =, <,>, <=,> =</h3>
    <pre>
            var_dump(1 == 2);
            var_dump(1 != 2);
            var_dump(1 < 2);
            var_dump(1 > 2);
            var_dump(1 > 1);
            var_dump(1 >= 1);
            var_dump(1 <= 2);
            var_dump(1 >= 2);
            var_dump(1 != 2);
        </pre>
    <u>Results:</u>
    <i>
        <?php
        echo ("<br>");
        var_dump(1 == 2);
        echo ("<br>");
        var_dump(1 != 2);
        echo ("<br>");
        var_dump(1 < 2);
        echo ("<br>");
        var_dump(1 > 2);
        echo ("<br>");
        var_dump(1 > 1);
        echo ("<br>");
        var_dump(1 >= 1);
        echo ("<br>");
        var_dump(1 <= 2);
        echo ("<br>");
        var_dump(1 >= 2);
        echo ("<br>");
        var_dump(1 != 2);
        echo ("<br>");

        ?>
    </i>
    </p>
    <p>
    <h3>Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor</h3>
    <pre>
        var_dump(true && false);
        var_dump(true and false);
        var_dump(false and false || true);
        var_dump(false && false || true);
        (this is a special case because || has got a higher priority than and, but less than &&)
        var_dump(true || false);
        var_dump(true or false);
        var_dump(true xor false);
        var_dump(true xor true);
        var_dump(!false);
        var_dump(true or false);

        </pre>
    <u>Results:</u>
    <i>
        <?php
        echo ("<br>");
        var_dump(true && false);
        echo ("<br>");
        var_dump(true and false);
        echo ("<br>");
        var_dump(false and false || true);
        echo ("<br>");
        var_dump(false && false || true);
        echo ("<br>");
        var_dump(true || false);
        echo ("<br>");
        var_dump(true or false);
        echo ("<br>");
        var_dump(true xor false);
        echo ("<br>");
        var_dump(true xor true);
        echo ("<br>");
        var_dump(!false);
        echo ("<br>");
        var_dump(true or false);
        echo ("<br>");
        ?>
    </i>
    </p>


</body>

</html>