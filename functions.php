<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function add($param1, $param2) {
    return $param1 + $param2;
}
print_r(add(3, 5));

?>
<br>
<?php
function mult($param1, $param2) {
    return $param1 * $param2;
}
print_r(mult(3, 5));
?>
<br>
<?php
function div($param1, $param2) {
    return $param1 / $param2;
}
print_r(div(20, 5));
?>
<br>
<?php
function all($param1, $param2) {
    return $param1 + $param2;
    return $param1 * $param2;
    return $param1 / $param2;
}
print_r(all(20, 5));
?>

</body>
</html>