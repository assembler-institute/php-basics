<?php


#FOR

for($i = 0; $i <= 5; $i++){

    echo $i;
}

echo "<br><br>";

#FOREACH

$a = [1, 2, 3, 17];

foreach ($a as $v) {
    echo $v;
}


echo "<br><br>";
#WHILE

$number = 1;

while($number < 10) {

    echo $number;
    $number++;

}


echo "<br><br>";

#DO WHILE


$n = 1;
do {
    echo $n;
    $n++;

} while ($n <= 5);


?>