<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<?php
$br = '<br/>';
$mathOperators = ["abs", "round", "max", "min"];

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
                    <h1>MATHS</h1>
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
                <a href="dates.php" class="item">
                    DATES
                </a>
                <a href="conditionals.php" class="item">
                    CONDITIONALS
                </a>
                <a href="types.php" class="item">
                    TYPES
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
                    <h2>Math Functions</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'foreach ($mathOperators as $op) {' . $br;
                        echo '  switch ($op) {' . $br;
                        echo '      case "abs":' . $br;
                        echo '          $numbers = numbers() * -1;' . $br;
                        echo '          break;' . $br;
                        echo '      case "round":' . $br;
                        echo '         $numbers = numbers() + 0.789;' . $br;
                        echo '          break;' . $br;
                        echo '      case "max" || "min":' . $br;
                        echo '          $numbers = implode(",", [numbers(), numbers()]);' . $br;
                        echo '          break;' . $br;
                        echo '      default:' . $br;
                        echo '           $numbers = numbers();' . $br;
                        echo '};' . $br;
                        echo '          break;' . $br;
                        echo ' $str =  $op . "(" . $numbers . ")";' . $br;
                        echo 'eval("$result=" . $str . ";");' . $br;
                        echo 'echo  $str . " = " .  $result ;' . $br;
                        echo '};' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        foreach ($mathOperators as $op) {
                            switch ($op) {
                                case 'abs':
                                    $numbers = numbers() * -1;
                                    break;
                                case 'round':
                                    $numbers = numbers() + 0.789;
                                    break;
                                case 'max' || 'min':
                                    $numbers = implode(",", [numbers(), numbers()]);
                                    break;
                                default:
                                    $numbers = numbers();
                            };
                            $str =  $op . '(' . $numbers . ')';

                            eval('$result=' . $str . ';');
                            echo  $str . ' = ' .  $result . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>