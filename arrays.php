<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Arrays</title>
</head>

<body>
    <h1>Arrays</h1>
    <?php

    // Define a simple array composed of text strings
    echo "<h2>Array of strings</h2>";
    echo '<pre>$strArr = array("One", "Two", "Three", "Four", "Five");</pre>';
    echo "<strong>Result: </strong>";
    $strArr = array("One", "Two", "Three", "Four", "Five");
    print_r($strArr);

    // Define a simple array consisting of whole numbers and decimal numbers
    echo "<h2>Array of numbers</h2>";
    echo '<pre>$numArr = array(12, 54676, 1.32, -6, 24);</pre>';
    echo "<strong>Result: </strong>";
    $numArr = array(12, 54676, 1.32, -6, 24);
    print_r($numArr);

    // Define a multidimensional array
    echo "<h2>Multidimensional array</h2>";
    echo '<pre>$multi = array(array("hola", "adios", "también pienso"), array(1, 38, 42, 7));</pre>';
    echo "<strong>Result: </strong>";
    $multi = array(array('hola', 'adios', 'también pienso'), array(1, 38, 42, 7));
    print_r($multi);

    // Execute the function that allows to obtain the length of an array
    echo "<h2>Length of an array</h2>";
    echo '<pre>
    $countingArr = array(1, 2, 3, 4, 5, 6);
    count($countingArr);
    </pre>';
    echo "<strong>Result: </strong>";
    $countingArr = array(1, 2, 3, 4, 5, 6);
    echo count($countingArr);

    // Execute the function that allows to obtain the combination of two arrays
    echo "<h2>Combine arrays</h2>";
    echo '<pre>
    $key = array("first", "second", "third");
    $values = array("cats", "dogs", "robots");
    array_combine($key, $values);
    </pre>';
    echo "<strong>Result: </strong>";
    $key = array("first", "second", "third");
    $values = array("cats", "dogs", "robots");
    print_r(array_combine($key, $values));

    // Execute the function that once is given an array return the last element of it
    echo "<h2>Last element of the array</h2>";
    echo '<pre>
    $endArr = array("The Interrupters", "Streetlight Manifesto", "Madness");
    end($endArr);</pre>';
    echo "<strong>Result: </strong>";
    $endArr = array("The Interrupters", "Streetlight Manifesto", "Madness");
    print_r(end($endArr));

    // Execute the function that once is given an array add a new element to the array in question
    echo "<h2>Push an element to the array</h2>";
    echo '<pre>
    $favFood = array("fuet", "chocolate", "pizza", "broccoli");
    array_push($favFood, "hamburger");
    </pre>';
    echo "<strong>Result: </strong>";
    $favFood = array("fuet", "chocolate", "pizza", "broccoli");
    array_push($favFood, "hamburger");
    print_r($favFood);

    ?>
</body>

</html>