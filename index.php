<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>
<?php
$textOne = 'This is using "echo"' . '<br />';
$textTwo = 'This is using "print"' . '<br />';
$textThree = ['This ', 'is ', 'using ', '"print_r" '];
?>

<body>
    <div id="header" class="header">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h1>PHP CHEAT SHEET</h1>
                </div>
                <a href="pages/print.php" class="item">
                    PRINTS
                </a>
                <a href="pages/iterators.php" class="item">
                    ITERATORS
                </a>
                <a href="pages/operators.php" class="item">
                    OPERATORS
                </a>
                <a href="pages/dates.php" class="item">
                    DATES
                </a>
                <a href="pages/conditionals.php" class="item">
                    CONDITIONALS
                </a>
                <a href="pages/types.php" class="item">
                    TYPES
                </a>
                <a href="pages/maths.php" class="item">
                    MATHS
                </a>
                <a href="pages/strings.php" class="item">
                    STRINGS
                </a>
                <a href="pages/arrays.php" class="item">
                    ARRAYS
                </a>
                <a href="pages/functions.php" class="item">
                    FUNCTIONS
                </a>
                <a href="https://www.php.net/" class="item">
                    PHP-INFO
                </a>
            </div>
        </div>
    </div>
    <div id="main">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h2>Wellcome!!</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'This is a cheat sheet for PHP basics learning';
                        ?>
                    </h3>
                    <h3>
                        <?php
                        echo  'Enjoy!';
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>