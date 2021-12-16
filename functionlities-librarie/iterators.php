<?php

//  Generate a snippet that makes use of for
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
   
}

// Generate a snippet that makes use of foreach
$arr = array(1, 2, 3, 4, 5, 6, 7 );
foreach ($arr as $value) {
    $value = $value * 2;
}

echo '<br>';
print_r ($arr);  // $arr is now array(2, 4, 6, 8)

unset($value); // break the reference with the last element

// Generate a snippet that uses while
echo '<br>';
echo '<br>';
$i = 1;
while ($i <= 10) {
   

    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

// Generate a snippet that uses do while
$i = 15;
do {
    echo '<br>';
    echo 'Hello we are famous now ';
} while ($i > 0 && $i < 10); //

?>