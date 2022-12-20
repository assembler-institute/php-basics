<?php
echo '<strong>results</strong><br><br>';
// array declarations

$fruits = ['orange', 'banana', 'apple'];

$nums = [1, 2.4, 5, 3, 4.6];

$multidimensionArr = ['hello', 'world', [1, 2, 3]];

// get length of array

function getLengthOfArray($arr)
{
    return count($arr);
}

echo getLengthOfArray($multidimensionArr) . '<br>';

// combine arrays

function combineArrays($arr1, $arr2)
{
    return array_merge($arr1, $arr2);
}

print_r(combineArrays($fruits, $nums));
echo '<br>';

// return last element

function returnLast($arr)
{
    return $arr[count($arr) - 1];
}

print_r(returnLast($fruits));
echo '<br>';

// add element to array

function addElement($arr, $elementToAdd)
{
    array_push($arr, $elementToAdd);
    return $arr;
}

print_r(addElement($fruits, 'cherries'));
echo '<br>';



echo '<h1>Arrays</h1>
<pre>
// array declarations

$fruits = ["orange", "banana", "apple"];

$nums = [1, 2.4, 5, 3, 4.6];

$multidimensionArr = ["hello", "world", [1, 2, 3]];

// get length of array

function getLengthOfArray($arr)
{
    return count($arr);
}

echo getLengthOfArray($multidimensionArr) . "<br>";

// combine arrays

function combineArrays($arr1, $arr2)
{
    return array_merge($arr1, $arr2);
}

print_r(combineArrays($fruits, $nums));
echo "<br>";

// return last element

function returnLast($arr)
{
    return $arr[count($arr) - 1];
}

print_r(returnLast($fruits));
echo "<br>";

// add element to array

function addElement($arr, $elementToAdd)
{
    array_push($arr, $elementToAdd);
    return $arr;
}

print_r(addElement($fruits, "cherries"));
echo "<br>";

</pre>
';