<?php

//For loop
for ($i = 1; $i <= 10; $i++) {
    echo $i."<br>";
}


//foreach loop
$array = array("Hello ", "Assembler ", "Team!");
foreach ($array as $value) {
    echo $value;

}

//while loop
$i = 1;
while ($i <= 10) {
    echo "<br>".$i;
    $i++;
}

// do while loop
$i = 1;
do {
    echo "<br>".$i;
    $i++;
} while ($i <= 10);