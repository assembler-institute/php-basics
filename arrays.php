<?php
$manga = array("Op, Zatch bell, Konosuba");
print_r($manga);
echo "<br><br>";

$numbers = array (5, 6, 4.2, 2.14);
print_r($numbers);
echo "<br><br>";
$gaming = array (
    array("Ps5",16,19),
    array("NSwtich",17,12),
    array("XboxScorpion",4,1),
    array("Wii",20,12)
  );
    
  echo $gaming[0][0].": In stock: ".$gaming[0][1].", sold: ".$gaming[0][2].".<br>";
  echo $gaming[1][0].": In stock: ".$gaming[1][1].", sold: ".$gaming[1][2].".<br>";
  echo $gaming[2][0].": In stock: ".$gaming[2][1].", sold: ".$gaming[2][2].".<br>";
  echo $gaming[3][0].": In stock: ".$gaming[3][1].", sold: ".$gaming[3][2].".<br>";
echo "<br><br>";
$candys = array("sugar","gumis","trince", "palet");
echo count($candys);
echo "<br><br>";
$k = array('green', 'red', 'yellow');
$l = array('hulk', 'sanji', 'sukuna');
$mix = array_combine($k, $l);
print_r($mix);
echo "<br><br>";
$letters = array('a', 'b', 'c','d', 'e', 'f');
echo end($letters);
echo "<br><br>";
$fruitsM = array("banana", "avocado", "apple");
array_push($fruitsM, "blueberry", "strawberry");
print_r($fruitsM);




?>