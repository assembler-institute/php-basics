<?php
header("Content-type: text/plain");
//For iterator
echo "This is a downcounter:\n";
for ($i = 10; $i > 0; $i--) {
    echo "Number $i\n";
}
//For iterator with breakpoint
echo "This is a downcounter upon to 5:\n";
for ($i = 1; $i < 10; $i++) {
    if ($i > 5) {
        break;
    }
    echo "Number $i\n";
}
//For iterator with no arguments
echo "Count to 10:\n";
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

//For Each iterator
$arr = array(1, 2, 3, 4, 5);
foreach ($arr as &$value) { //Pass by reference
    $value = $value * 2;
}
unset($value);
//if we don't use unset() function 
print_r($arr);
echo "Value is $value\n";
foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}


//While iterator
//Example 1//
$i = 1;
while ($i <= 10) {
    echo "$i\n";
    $i++;
}

//Example 2//
$i = 1;
while ($i <= 10):
    echo "$i\n";
    $i++;
endwhile;

//Do while iterator
$i = 0;
do {
    echo "$i\n";
    $i++;
} while ($i <= 10);
