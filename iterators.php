<?php
// Usage of "for" loop
echo "<p>For loop<p>";

$maxNum = 5;

for ($i = 0; $i < $maxNum; $i++){
    echo "Number $i hasn't reached $maxNum <br>";
}

// Usage of "foreach" loop
echo "<p>Foreach loop<p>";

$testArr = array("John", "Paul", "George", "Ringo");

foreach($testArr as $beatle){
    echo "$beatle was a Beatle <br>";
}

// Usage of "while" loop
echo "<p>While loop<p>";

$whileNum = 0;
$maxNum = 10;

while($whileNum <= $maxNum){
    echo "Current number $whileNum <br>";
    $whileNum++;
}

// Usage of "do while" loop
echo "<p>Do while loop<p>";

$doWhileNum = 0;

do{
    echo "Current number $doWhileNum <br>";
    $doWhileNum++;
} while( $doWhileNum <= $maxNum);
?>