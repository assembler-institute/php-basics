<?php
// Generate a snippet that makes use of for
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
// Generate a snippet that makes use of foreach
$array = array(1,2,3,4);
foreach ($array as $key => $value) {
    # code...
    echo $value;
}
// Generate a snippet that uses while
$i = 0;
while ($i <= 10) {
    # code...
    echo $i++;
}
// Generate a snippet that uses do while
$i = 0;
do {
    # code...
    echo $i++;
} while ($i <= 10);

?>