<?php

function Sum($a, $b)
{
    return $a + $b;
}


function Multiply($a, $b)
{
    return $a * $b;
}

function Division($a, $b)
{
    return $a / $b;
}

function operation($a, $b, $op)
{
    switch ($op) {
        case "+":
            return Sum($a, $b);
            break;
        case "*":
            return Multiply($a, $b);
            break;
        case "/":
            return Division($a, $b);
            break;
    }
}
