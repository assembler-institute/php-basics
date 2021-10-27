<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterators</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<?php
$br = '<br/>';
$number = 5;
$numberTwo = 1;
$letters = ['q', 'w', 'e', 'r', 't', 'y'];
$textThree = ['This ', 'is ', 'using ', '"print_r" '];
?>

<body>
    <div id="header" class="header">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h1>ITERATORS</h1>
                </div>
                <a href="../index.php" class="item">
                    🏠
                </a>
                <a href="print.php" class="item">
                    PRINTS
                </a>
                <a href="operators.php" class="item">
                    OPERATORS
                </a>
                <a href="dates.php" class="item">
                    DATES
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
                    <h2>For</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'for ($i = 0; $i < $number; $i++) {' . $br;
                        echo 'echo "Loop number" . $i;' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        for ($i = 0; $i < $number; $i++) {
                            echo 'Loop number' . $i  . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Foreach</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'foreach ($letters as $l) {' . $br;
                        print ' echo "Letra " . $l  . ".";' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        foreach ($letters as $l) {
                            echo 'Letra ' . $l  . '<br/>';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>While</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'while ($number > 0) {' . $br;
                        echo 'echo "Decrement count " . $number' . $br;
                        echo '$number--;' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        for ($i = 0; $i < $number; $i++) {
                            echo 'Loop number' . $i  . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>For</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'do {' . $br;
                        echo 'echo "Decrement count ". $number;' . $br;
                        echo '$number--;' . $br;
                        echo ' } while ($number >= 0);';
                        ?>
                    </h3>
                    <p>
                        <?php
                        do {
                            echo 'Decrement count ' . $number  . '<br />';
                            $number--;
                        } while ($number >= 0);
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>