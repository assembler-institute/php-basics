<?php
# Simple array composed of text strings

echo ("<i>Simple array composed of text strings: (array() or [])  </i> <br>");

echo ('method: array("Ho", "Ho", "Ho", "Ho")');
echo ("<br>");
echo ('method: ["He", "He", "He", "He"]');

echo ("<hr>");

#  Simple array consisting of whole numbers and decimal numbers

echo ("<i>Simple array consisting of whole numbers and decimal numbers: 1, 2.3, 3.5, -4 (array() or [])  </i> <br>");

echo ('method: array(1, 2.3, 3.5, -4)');
echo ("<br>");
echo ('method: [1, 2.3, 3.5, -4]');

echo ("<hr>");

#  Multidimensional array

echo ("Multidimensional array: <br>");

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  echo '<pre>'; print_r($cars); echo '</pre>';

echo ("<hr>");

#  Obtain the length of an array

echo ("<i>Obtain the length of an array (count()).  </i> <br>");

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

echo ("Length: " . count($cars));

echo ("<hr>");

#  Obtain the combination of two arrays

echo ("<i>Obtain the combination of two arrays(array_merge()).  </i> <br>");

$array1 = array("color", "red", 2, 4);
$array2 = array("a", "b", "color", "shape", 4);
$result = array_merge($array1, $array2);
echo '<pre>1-'; print_r($array1); echo '</pre>';
echo '<pre>2-'; print_r($array2); echo '</pre>';
echo '<pre>Merged-'; print_r($result); echo '</pre>';

echo ("<hr>");

#  Obtain the last element of an array

echo ("<i>Obtain the last element of an array(end()).  </i> <br>");

$array1 = array("color", "red", 2.32, "cars");
echo '<pre>'; print_r($array1); echo '</pre>';
echo ("the las element is: " . end($array1));

echo ("<hr>");

#  Add a new element to the array

echo ("<i>Add a new element to the array(array_push()).  </i> <br><br>");

$stack = array("orange", "banana");
echo '<pre>before: '; print_r($stack); echo '</pre>';
array_push($stack, "apple", "raspberry");
echo '<pre>after: '; print_r($stack); echo '</pre>';
?>