<!-- Define a simple array composed of text strings -->

<?php
$cars = array("Mercedes", "Tesla", "Aston Martin    ");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<!-- Define a simple array consisting of whole numbers and decimal numbers -->
</br>
<?php
$numbers = array(1, 1.5, 2);
echo "I like " . $numbers[0] . ", " . $numbers[1] . " and " . $numbers[2] . ".";
?>

<!-- Define a multidimensional array -->
</br>
<?php
$cars = array (
    array("Mercedes",22,18),
    array("Tesla",15,13),
    array("Range Rover",5,2),
    array("Ferrari",17,15)
  );

  echo $cars[0][0].": In stock: ".$cars[0][1].", Sold: ".$cars[0][2].".<br>";
?>

<!-- Execute the function that allows to obtain the length of an array -->
</br>
<?php
	$arr = ["a", "b", "c", "d"];
	echo count($arr);
  ?>

<!-- Execute the function that allows to obtain the combination of two arrays -->
</br>
<?php
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
?>

<!-- Execute the function that once is given an array return the last element of it -->
</br>
<?php

$fruits = array('poma', 'pera', 'taronja');
echo end($fruits); // arándano

?>

<!-- Execute the function that once is given an array add a new element to the array in question -->
</br>
<?php
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?>