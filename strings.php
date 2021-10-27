<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings PHP</title>
</head>

<body>

    <div>
        <h2>Print a text string</h2>
        <p>
            <?php
            print "Printed a text string";
            ?>
        </p>
    </div>

    <div>
        <h2>Print a text string that interpret variables</h2>
        <p>
            <?php
            $Esto = "Variable";
            print "$Esto: es una variable";
            ?>
        </p>
    </div>

    <div>
        <h2>Concatenate a previously declared variable in a text string</h2>
        <p>
            <?php
            $a = "Hola";
            print $a . " Mundo";
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows you to replace text in a string (case sensitive)</h2>
        <p>
            <?php
            $text = "Hola soy Paul";
            echo str_replace("Paul", "Lucas", $text);
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</h2>
        <p>
            <?php
            $text = "Hola soy Paul";
            echo str_ireplace("Paul", "Leo", $text);
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows you to write a text N times</h2>
        <p>
            <?php
            echo str_repeat("Hola ", 3);
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows to obtain the length of a text string</h2>
        <p>
            <?php
            $text = "Hola soy Paul";
            echo strlen($text);
            ?>
        </p>
    </div>

    <div>
        <h2>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</h2>
        <p>
            <?php
            $text = "Hola soy Paul";
            echo strpos($text, "Paul");
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows a text string to be capitalized</h2>
        <p>
            <?php
            echo strtoupper("hello world!");
            ?>
        </p>
    </div>

    <div>
        <h2>Execute the function that allows you to transform a text string to lowercase</h2>
        <p>
            <?php
            echo strtolower("HEllO WORLD!");
            ?>
        </p>
    </div>
    <div>
        <h2>Execute the function that allows to obtain a text substring from the position</h2>
        <p>
            <?php
            echo substr("HEllO WORLD!", -6, 5);
            ?>
        </p>
    </div>



</body>

</html>