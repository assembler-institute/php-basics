<html>

<?php

var_dump(1 == 2);

$result = 5 * 6 + (3 - 1) / 4;

if ($result < 2) {
    echo "yeah";
}

if ($result >= 20) {
    echo "nope";
}

if ($result == 12) {
    echo "yeah";
}


if ($result != 8) {
    $result = 12;
}

$result2 = 9 * 10 - 7;

if ($result > $result2 || !$result2) echo 12;

if ($result2 > $result && $result2 > 10) print "yeah";
?>

</html>