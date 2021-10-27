<html>

<?php
$a = abs(-5.9);
var_dump($a);

echo "<br>";

$b = round(6.55);
var_dump($b);

echo "<br>";

$numbers = array(3, 8, 0, 9, 23, 12);
var_dump(max($numbers));
var_dump(min($numbers));

$random = rand(10, 25);
var_dump($random);

?>

</html>