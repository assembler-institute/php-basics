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
    <h3>Define a simple array composed of text strings</h3>
    <pre>
        $simpleArray = array("one", "two", "three");
        var_dump($simpleArray);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $simpleArray = array("one", "two", "three");
        var_dump($simpleArray);
        ?>
    </i>
    </p>
    <p>
    <h3>Define a simple array consisting of whole numbers and decimal numbers</h3>
    <pre>
        $simpleArray = array(1, 1.1, 1.2);
        var_dump($simpleArray);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $simpleArray = array(1, 1.1, 1.2);
        var_dump($simpleArray);
        ?>
    </i>
    </p>
    <p>
    <h3>Define a multidimensional array</h3>
    <pre>
        $multiArray = array(1, 1.1, 1.2, array("row 1", "row 2"));
        var_dump($multiArray);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $multiArray = array(1, 1.1, 1.2, array("row 1", "row 2"));
        var_dump($multiArray);
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows to obtain the length of an array</h3>
    <pre>
        $multiArray = array(1, 1.1, 1.2, array("row 1", "row 2"));
        var_dump(count($multiArray));
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $multiArray = array(1, 1.1, 1.2, array("row 1", "row 2"));
        var_dump(count($multiArray));
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows to obtain the length of an array</h3>
    <pre>
        $multiArray = array(1, 1.1, 1.2, array("row 1", "row 2"));
        var_dump(count($multiArray));
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $multiArray = array(1, 1.1, 1.2, array("row 1", "row 2"));
        var_dump(count($multiArray));
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows to obtain the combination of two arrays</h3>
    <pre>
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        $c = array_combine($a, $b);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        var_dump(array_combine($a, $b));
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows to obtain the combination of two arrays</h3>
    <pre>
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        var_dump(array_merge($a, $b));
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        var_dump(array_merge($a, $b));
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that once is given an array return the last element of it</h3>
    <pre>
        $a = array('green', 'red', 'yellow');
        var_dump(end($a));
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $a = array('green', 'red', 'yellow');
        var_dump(end($a));
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that once is given an array add a new element to the array in question</h3>
    <pre>
        $a = array('green', 'red', 'yellow');
        array_push($a, "orange");
        var_dump($a);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $a = array('green', 'red', 'yellow');
        array_push($a, "orange");
        var_dump($a);
        ?>
    </i>
    </p>
</body>

</html>