<?php
// Array of strings
echo "<p>Array of strings<p>";

echo '<pre>
    $strArray = array("Hello", "this", "is", "an", "array");
    print_r($strArray);
    </pre>

    <p>Result:</p>';

$strArray = array("Hello", "this", "is", "an", "array");
echo "<pre>", print_r($strArray), "</pre>";

// Array of ints and floats
echo "<p>Array of ints and floats<p>";

echo '<pre>
    $numArray = array(2, 4, 5.6, -24, 28.5);
    print_r($numArray);
    </pre>

    <p>Result:</p>';

$numArray = array(2, 4, 5.6, -24, 28.5);
echo "<pre>", print_r($numArray), "</pre>";

// Multidimensional array
echo "<p>Array of ints and floats<p>";

echo '<pre>
    $numArray = array(2, 4, 5.6, -24, 28.5);
    print_r($numArray);
    </pre>

    <p>Result:</p>';

$bealtes = array(
    array("John", "Guitar"),
    array("Paul", "Bass"),
    array("George", "Guitar"),
    array("Ringo", "Drums")
);

echo "<pre>", print_r($bealtes), "</pre>";

// Array length
echo "<p>Array length</p>";

echo '<pre>
    $lenArray = array(1, 2, 3, 4, 5, 6);
    echo count($lenArray);
    </pre>

    <p>Result:</p>';

$lenArray = array(1, 2, 3, 4, 5, 6);
echo count($lenArray);

// Array combination
echo "<p>Array combination</p>";

echo '<pre>
    $array1 = array(1, 2, 3, 4, 5, 6);
    array2 = array("a", "b", "c", "d", "e", "f");
    $combinedArr = array_merge($array1, $array2);
    echo print_r($combinedArr);
    </pre>

    <p>Result:</p>';

$array1 = array(1, 2, 3, 4, 5, 6);
$array2 = array("a", "b", "c", "d", "e", "f");
$combinedArr = array_merge($array1, $array2);
echo "<pre>", print_r($combinedArr), "</pre>";

// Return last element
echo "<p>Return last element</p>";

echo '<pre>
    $array1 = array(1, 2, 3, 4, 5, 6);
    echo end($array1);
    </pre>

    <p>Result:</p>';

$array1 = array(1, 2, 3, 4, 5, 6);
echo end($array1);

// Add element
echo "<p>Add element</p>";

echo '<pre>
    $array1 = array(1, 2, 3, 4, 5, 6);
    array_push($array1, 7);
    echo count($array1);
    </pre>

    <p>Result:</p>';

$array1 = array(1, 2, 3, 4, 5, 6);
array_push($array1, 7);
echo "<pre>", print_r($array1), "</pre>";
?>