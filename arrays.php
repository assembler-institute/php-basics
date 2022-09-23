<?php

// Arrays in PHP


// Define array with text strings
$shoppingList = array('rice', 'bananas', 'tomatoes', 'spinach');
var_dump($shoppingList);
echo '<br>';
print_r($shoppingList);

echo '<br><br>';

// Define array of whole numbers and decimals
$numbersMixed = array(21.7, 3.4459, 7, 62, 42.3);
print_r($numbersMixed);

echo '<br><br>';

// Define a multidimensional array
$progLanguages = array (
    array ('node', 'php', 'python'),
    array('javascript', 'html', 'css')
);
var_dump($progLanguages);
echo '<br>';
print_r($progLanguages);

echo '<br><br>';


// Count all the values in an array
echo count($shoppingList);

echo '<br><br>';

// Combine 2 arrays
// The first way creates keys of list a and values of list b. 
$anotherList = array ('pasta', 'oranges', 'carrots', 'zucchini');
print_r(array_combine($shoppingList, $anotherList));
echo '<br><br>';
// The second seems more useful, concatenating the arrays, first a then b.
print_r(array_merge($shoppingList, $anotherList));

echo '<br><br>';

// Get the last element in array
$lastItem = end($anotherList);
echo $lastItem;

echo '<br><br>';

// Add element to beginning of an array
array_unshift($anotherList, 'bread');
print_r($anotherList);

echo '<br><br>';

// Remove element from beginning of an array
array_shift($anotherList);
print_r($anotherList);

echo '<br><br>';

// Add element to end of an array
array_push($anotherList, 'bread');
print_r($anotherList);

echo '<br><br>';

// Remove element from end of an array
array_pop($anotherList);
print_r($anotherList);

echo '<br><br>';


