<?php

// Iterators in PHP


// for
$numbers = array(5, 10, 15, 20);
print_r($numbers);

for ($i = 0; $i <= count($numbers) - 1; $i++) {
    if ($i < 3) {
        echo $numbers[$i] . ', ';
    } else {
        echo $numbers[$i] . '.';
    }
};

echo '<br><br>';

// foreach
class Taxi  // declare taxi object / class
{
    public $color = 'yellow';
    public $location = 'local';
    public $price = '10eur or less';
}

$class = new Taxi();    // create obj / class

foreach ($class as $key => $value) {
    print "key: $key, value: $value<br>";
}

echo '<br><br>';

// while
$i = 1;
while ($i <= 10) {
   echo $i++;
   echo '&nbsp&nbsp&nbsp&nbsp';
}


echo '<br><br>';

// do while
$j = 10;
do {
    echo $j--;
    echo '&nbsp&nbsp&nbsp&nbsp';
} while ($j > 0);