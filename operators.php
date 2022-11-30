<?php

$i = 1;
$l = 2;
$z = 5;
$x = 10;
$y = 6;

print $i + $l;
print $l - $i;
print $i * $l;
print $l / $i;
print $z % $l;

if ($i == 1)
{
    print "iguales! <br>";
}
if ($i != 2)
{
    print "no iguales! <br>";
}
if ($i < 2)
{
    print "menor que 2 <br>";
}
if ($i > 0)
{
    print "mayor que 0 <br>";
}
if ($i <= 2)
{
    print "menor o igual que 2 <br>";
}
if ($i >= 0)
{
    print "mayor o igual que 0 <br>";
}

if ($x == 10 and $y == 6) {
    echo "Hello world! <br>";
}

if ($x == 10 && $y == 6) {
    echo "Hello world! <br>";
}

if ($x == 10 || $y == 5) {
    echo "Hello world! <br>";
}

if ($x == 10 or $y == 5) {
    echo "Hello world! <br>";
}

if ($x == 10 && $y == 6) {
    echo "Hello world! && <br>";
}

if (! ($x==9) ) {
    echo "Hello world! water <br>";
}

if ($x == 10 xor $y == 6) {
    echo "Hello world! xor <br>";
}




?>