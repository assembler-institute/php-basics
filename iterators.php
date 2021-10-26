<!-- Generate a snippet that makes use of for -->

<?php
    for ($i = 0; $i <= 3; $i++) {
        
        echo "Loop counter is : $i </br>"  ; 
    }
?>

<!-- Generate a snippet that makes use of foreach -->
</br>

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

<!-- Generate a snippet that uses while -->
</br>

<?php
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
?>  

<!-- Generate a snippet that uses do while -->
</br>

<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 4);
?>




