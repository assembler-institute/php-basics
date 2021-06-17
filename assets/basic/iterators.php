<?php
// Usage of "for" loop
echo "<h4>For loop</h4>";

$maxNum = 5;
for ($i = 0; $i < $maxNum; $i++){
    echo "Number $i hasn't reached $maxNum <br>";
}

// Usage of "foreach" loop
echo "<h4>Foreach loop</h4>";

$testArr = array("John", "Paul", "George", "Ringo");

foreach($testArr as $beatle){
    echo "$beatle was a Beatle <br>";
}

// Usage of "while" loop
echo "<h4>While loop</h4>";

$whileNum = 0;
$maxNum = 10;

while($whileNum <= $maxNum){
    echo "Current number $whileNum <br>";
    $whileNum++;
}

// Usage of "do while" loop
echo "<h4>Do while loop</h4>";

$doWhileNum = 0;

do{
    echo "Current number $doWhileNum <br>";
    $doWhileNum++;
} while( $doWhileNum <= $maxNum);
?>