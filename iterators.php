<?php

#Generate a snippet that makes use of for

for($i=0; $i < 10; $i++){
    echo $i;
}

echo "<br>";

#Generate a snippet that makes use of foreach

$drinks = array("cocacola", "fanta", "pepsi", "appletiser");

foreach($drinks as $choose){
    echo $choose;
}

echo "<br>";

#Generate a snippet that uses while

$more = 10;

while($more < 20){
    echo $more;
    $more++;
}

echo "<br>";

#Generate a snippet that uses do while

$less = 20;

do{
    echo $less;
    $less++;
}
while($less < 25);


?>