<?php

/* PUNTO 1 */

$x = ['Javier', 'Pascual', 'Tunez'];
var_dump(implode(" ", $x));
echo "<br><br>";

/* PUNTO 2 */

$b = ['1', '2', '3.55', '4', '5.12'];
var_dump(implode(", ", $b));
echo "<br><br>";

/* PUNTO 3 */

$colors = array (
    array("Red",22,18),
    array("Blue",15,13),
    array("Green",5,2),
    array("Black",17,15)
  );

echo $colors[0][0].": In stock: ".$colors[0][1].", sold: ".$colors[0][2].".<br>";
echo $colors[1][0].": In stock: ".$colors[1][1].", sold: ".$colors[1][2].".<br>";
echo $colors[2][0].": In stock: ".$colors[2][1].", sold: ".$colors[2][2].".<br>";
echo $colors[3][0].": In stock: ".$colors[3][1].", sold: ".$colors[3][2].".<br>";
echo "<br><br>";

/* PUNTO 4 */

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));
echo "<br><br>";

/* PUNTO 5 */

$c = array('green', 'red', 'yellow');
$d = array('avocado', 'apple', 'banana');
$e = array_combine($c, $d);

print_r($e);
echo "<br><br>";

/* PUNTO 6 */

$frutas = array('Manzana', 'Sandia', 'Melocoton');
echo end($frutas);
echo "<br><br>";

/* PUNTO 7 */

$animals = array("Horse", "Cat");
array_push($animals, "Dog", "Rat");
print_r($animals);

?>