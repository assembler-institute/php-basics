<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths PHP</title>
</head>

<body>
    <div>
        <h2>Define a variable whose value is the result of the function that returns an absolute value.</h2>
        <p>
            <?php
            function absolute($x)
            {
                echo abs($x);
            };
            absolute(-8);
            ?>
        </p>
    </div>
    <div>
        <h2>Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.</h2>
        <p>
            <?php
            function nestInteger($x)
            {
                echo ceil($x);
            };
            nestInteger(5.1);
            ?>
        </p>
    </div>
    <div>
        <h2>Define a variable whose value is the result of the function that returns the highest value of a series of values that are received by parameter.</h2>
        <p>
            <?php
            function highest($x)
            {
                echo max($x);
            };
            highest([5, 3, 1]);
            ?>
        </p>
    </div>
    <div>
        <h2>Define a variable whose value is the result of the function that returns the lowest value of a series of values that are received by parameter</h2>
        <p>
            <?php
            function lowest($x)
            {
                echo min($x);
            };
            lowest([5, 3, 1]);
            ?>
        </p>
    </div>
    <div>
        <h2>Define a variable whose value is the result of the function that returns a random number.</h2>
        <p>
            <?php
            function random()
            {
                echo rand();
            };
            random();
            ?>
        </p>
    </div>
</body>

</html>