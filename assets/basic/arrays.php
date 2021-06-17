<?php
// Array of strings
echo "<h4>Array of strings</h4>";

echo '<pre class="demo-code">
$strArray = array("Hello", "this", "is", "an", "array");
print_r($strArray);
</pre>

<p>Result:</p>';

$strArray = array("Hello", "this", "is", "an", "array");
echo "<pre class='demo-code'>", print_r($strArray, true), "</pre>";

// Array of ints and floats
echo "<h4>Array of ints and floats</h4>";

echo '<pre class="demo-code">
$numArray = array(2, 4, 5.6, -24, 28.5);
print_r($numArray);
</pre>

<p>Result:</p>';

$numArray = array(2, 4, 5.6, -24, 28.5);
echo "<pre class='demo-code'>", print_r($numArray, true), "</pre>";

// Multidimensional array
echo "<h4>Array of ints and floats</h4>";

echo '<pre class="demo-code">
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

echo "<pre class='demo-code'>", print_r($bealtes, true), "</pre>";

// Array length
echo "<h4>Array length</h4>";

echo '<pre class="demo-code">
$lenArray = array(1, 2, 3, 4, 5, 6);
echo count($lenArray);
</pre>

<p>Result:</p>';

$lenArray = array(1, 2, 3, 4, 5, 6);
echo count($lenArray);

// Array combination
echo "<h4>Array combination</h4>";

echo '<pre class="demo-code">
$array1 = array(1, 2, 3, 4, 5, 6);
array2 = array("a", "b", "c", "d", "e", "f");
$combinedArr = array_merge($array1, $array2);
echo print_r($combinedArr);
</pre>

<p>Result:</p>';

$array1 = array(1, 2, 3, 4, 5, 6);
$array2 = array("a", "b", "c", "d", "e", "f");
$combinedArr = array_merge($array1, $array2);
echo "<pre class='demo-code'>", print_r($combinedArr, true), "</pre>";

// Return last element
echo "<h4>Return last element</h4>";

echo '<pre class="demo-code">
$array1 = array(1, 2, 3, 4, 5, 6);
echo end($array1);
</pre>

<p>Result:</p>';

$testArray = array(1, 2, 3, 4, 5, 6);
echo end($testArray);

// Add element
echo "<h4>Add element</h4>";

echo '<pre class="demo-code">
$array1 = array(1, 2, 3, 4, 5, 6);
array_push($array1, 7);
echo count($array1);
</pre>

<p>Result:</p>';

$testArray = array(1, 2, 3, 4, 5, 6);
array_push($testArray, 7);
echo "<pre class='demo-code'>", print_r($testArray, true), "</pre>";
?>