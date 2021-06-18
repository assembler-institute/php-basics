<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Types</title>
</head>

<body>
    <h1>Types</h1>
    <?php

    // Define a new variable and assign a value to each of the following types:
    // boolean

    echo "<h2>Boolean</h2>";
    echo '<pre>$bool = true;</pre>';
    echo "<strong>Result: </strong>";
    $bool = true;
    echo $bool;

    // integer
    echo "<h2>Integer</h2>";
    echo '<pre>$int = -2;</pre>';
    echo "<strong>Result: </strong>";
    $int = -2;
    echo $int;

    // float
    echo "<h2>Float</h2>";
    echo '<pre>$fl = 1.9;</pre>';
    echo "<strong>Result: </strong>";
    $fl = 1.9;
    echo $fl;

    // string
    echo "<h2>String</h2>";
    echo '<pre>$str = "Hi there!";</pre>';
    echo "<strong>Result: </strong>";
    $str = "Hi there!";
    echo $str;

    // array
    echo "<h2>Array</h2>";
    echo '<pre>$arr = array("Hey", true, 17);</pre>';
    echo "<strong>Result: </strong>";
    $arr = array("Hey", true, 17);
    print_r($arr);

    // object
    echo "<h2>Object</h2>";
    echo '<pre>
    class randomHuman {
        function sayHi() {
            echo "Hi!";
        }
    }

    $randomOne = new randomHuman;
    $randomOne->sayHi();
    </pre>';
    echo "<strong>Result: </strong>";
    class randomHuman
    {
        function sayHi()
        {
            echo "Hi!";
        }
    }

    $randomOne = new randomHuman;
    $randomOne->sayHi();

    // NULL
    echo "<h2>Null  </h2>";
    echo '<pre>$nothingToSee = null;</pre>';
    echo "<strong>Result: </strong>";
    $nothingToSee = null;
    echo "Here is the null result: $nothingToSee.";

    ?>
</body>

</html>