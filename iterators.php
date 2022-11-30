<?php

for ($i; $i <= 10; $i++){
    echo $i;
}

print "<br>";

$array = array(1, 2, 3, 4);
foreach ($array as &$value) {
    print $value;
};

$i = 1;
print "<br>";

while ($i < 21){
    print $i;
    $i++;
}
print "<br>";
$l = 1;
do{
    echo "the number is: $l";
    print "<br>";
    $l++;
}
while ($l <= 7);


?>