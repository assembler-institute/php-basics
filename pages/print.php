<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="../assets/styles.css">
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
                    <h1>PRINTS</h1>
                </div>
                <a href="../index.php" class="item">
                    🏠
                </a>
                <a href="iterators.php" class="item">
                    ITERATORS
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
                    <h2>Echo</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'CODE=>"echo $textOne;"';
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo  $textOne;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Print</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'CODE=>"print $textTwo;"';
                        ?>
                    </h3>
                    <p>
                        <?php
                        print $textTwo;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Print_r</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'CODE=>"print_r($textThree);"';
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo '<pre>';
                        print_r($textThree);
                        echo '</pre>';
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>