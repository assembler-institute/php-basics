<?php
echo("<h1>Iterators on PHP</h1>");

echo("<h2>For loop</h2>");
for ($i=0; $i <= 10; $i++ ){
    echo("<p>This is number <b>$i</b></p>");
}
echo("<hr>");
echo("<h2>Foreach loop</h2>");

$customers = array("John", "Anna", "Julia");

// *IMP foreach ($array as $element){...code...}
foreach($customers as $value){
    echo("<p>" .$value. "</p>");
}

echo("<hr>");
echo("<h2>While loop</h2>");

$i=0;
while ($i <= 10){
    echo("<p>Number is $i</p>");
    $i+=2;
}

echo("<hr>");
echo("<h2>Do while</h2>");

$j = 10;
do {
    echo("<p>$j</p>");
    $j--;
}while($j>=0);



?>