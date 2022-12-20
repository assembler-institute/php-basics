<?php 

$a = 0;
$b = 10;
$array = array("0"=>"one", "1"=>"two", "2"=>"three", "3"=>"four", "4"=>"five");
$line = "<br />";
echo "<h3>Bucle for</h3>";
# for
for($i=0 ; $i < count($array) ; $i++) {
  echo "I have <b>$array[$i] €</b>$line";
}
echo "<h3>Bucle forEach</h3>";

# foreach
foreach ($array as $key => $num) {
  echo "I have <b>$num €</b> in key: <b>$key$line</b>";
}
echo "<h3>Bucle while</h3>";

# while
while ($a < 10) {
  $a++;
  echo "<b>$a €</b>", $line;
}

echo "<h3>Bucle do... while</h3>";

# do... while
do {
  echo "<b>$b €</b>", $line;
  $b--;
} while ($b > 0);

?>