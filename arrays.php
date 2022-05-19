<html>

<?php

$strArr = array("salt", "pepper", "oil", "egg");
$numArr = [2, 43, 2.43, 12.1];
$multidimensional = array([1, 2], ["Juan", "Pedro"]);

echo "</br>";

print count($numArr);

echo "</br>";

array_combine($numArr, [1, 2, 3, 4]);

echo "</br>";

print array_key_last($strArr);

echo "</br>";

array_push($strArr, "vinegar");

?>

</html>