<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<?php
$numbersArray = [numbers(), numbers(), numbers(), numbers(), numbers()];
$textArray = ['This ', 'is ', 'using ', '"print_r" '];
$dimArray = ['First dimension', ['Second dimension', ['Third dimension', ['end']]]];

function numbers($a = 0, $b = 100)
{
    $n = random_int($a, $b);
    return strval($n);
};
?>

<body>
    <div id="header" class="header">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h1>ARRAYS</h1>
                </div>
                <a href="index.php" class="item">
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
                    <h2>Count</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'count($textArray)';
                        ?>
                    </h3>
                    <p>
                        <?php
                        print_r($textArray);
                        echo ' the length of this is => ' . count($textArray) . '<br/>';
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Merge</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'array_merge($dimArray, $numbersArray)';
                        ?>
                    </h3>
                    <p>
                        <?php
                        print_r(array_merge($dimArray, $numbersArray));
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>End</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'end($numbersArray)';
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo 'The last number of the array is: ' . end($numbersArray) . '<br/>';
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Push</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'array_push($numbersArray,  $insertNumber);';
                        ?>
                    </h3>
                    <p>
                        <?php
                        $insertNumber = numbers();
                        echo 'Insert the number "' . $insertNumber . '" in the array' . '<br/>';
                        array_push($numbersArray,  $insertNumber);
                        print_r($numbersArray);
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>