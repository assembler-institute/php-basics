<html>

<?php

function sum($a, $b)
{
    return $a + $b;
}

function mult($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    return $a / $b;
}

function last($a, $b, $c)
{
    switch ($c) {
        case "+":
            return sum($a, $b);
            break;
        case "*":
            return mult($a, $b);
            break;
        case "/":
            return div($a, $b);
            break;
        default:
            break;
    }
}

print last(98, 71, "*")
?>

</html>