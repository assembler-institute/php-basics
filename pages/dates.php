<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<?php
$br = '<br/>';
define("CURRENT_DATE", date('Y-m-d'));
$date = new DateTime('1987-09-14');
$textTwo = 'This is using "print"' . '<br />';
$textThree = ['This ', 'is ', 'using ', '"print_r" '];
?>

<body>
    <div id="header" class="header">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h1>DATES</h1>
                </div>
                <a href="../index.php" class="item">
                    🏠
                </a>
                <a href="print.php" class="item">
                    PRINTS
                </a>
                <a href="iterators.php" class="item">
                    ITERATORS
                </a>
                <a href="operators.php" class="item">
                    OPERATORS
                </a>
                <a href="conditionals.php" class="item">
                    CONDITIONALS
                </a>
                <a href="types.php" class="item">
                    TYPES
                </a>
                <a href="maths.php" class="item">
                    MATHS
                </a>
                <a href="strings.php" class="item">
                    STRINGS
                </a>
                <a href="arrays.php" class="item">
                    ARRAYS
                </a>
                <a href="functions.php" class="item">
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
                    <h2>Current Date</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo CURRENT_DATE' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo CURRENT_DATE . $br;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Date Format</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'date_format($date, "d-m-Y")' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo 'My birth date is ' . date_format($date, 'd-m-Y') . $br;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Date Day</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo ' date("d")' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo 'Today is ' . date('d') . '<br />';
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Date Month</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo  'date("m")' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo 'This month is ' . date('m') . $br;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Date Year</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo  'date("Y")' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo 'This month is ' . date('Y') . $br;
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>