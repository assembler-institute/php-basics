<?php include './incl/header.php'?>
<?php

echo "<h2>Arrays</h2>";
$firstquarter = array(1 => 'January'."<br>", 'February'."<br>", 'March'."<br>");
print_r ($firstquarter);

$arrs = array (
    array("array1",22,18),
    array("array2",15,13),
    array("array3",5,2),
  );
  echo "<br>";
echo $arrs[0][0].": any: ".$arrs[0][1].", any2: ".$arrs[0][2].".<br>";
echo $arrs[1][0].": any: ".$arrs[1][1].", any2: ".$arrs[1][2].".<br>";
$arr = ["one", "two", "three", "four"];
	echo count($arr)."<br>";
function lastArr($arr){
    echo end($arr);
}
lastArr($arr);
echo "<br>";


$original = array( 'a', 'b', 'c', 'd', 'e' );
$inserted = array( 'x' ); 
// $out=parray_splice( $original, 3, 0, $inserted );
print_r ($out);

?>
<?php include './incl/footer.php'?>