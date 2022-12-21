<?php

// ForEach

$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}

print_r ($array);
echo "<br><br>";

// For

$i = 0;
for ($i=0; $i < 10; $i++){
    echo $i;
  }
  echo "<br><br>";

// While
$y = 0;
while ($y < 10){
  $y++;
  echo "While: $y";
}
echo "<br><br>";

// Do-while que imprime 012345678910
$x = 0;
do{
    $x++;
    echo "Do-While: $x";
  } while ($x<10);

?>