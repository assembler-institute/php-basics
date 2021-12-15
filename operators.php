<?php
$x = 10;  
$y = 6;
echo $x + $y."<br>"; 
echo $x - $y."<br>";
echo $x * $y."<br>";
echo $x / $y."<br>";
echo $x % $y."<br>";
$a = 20;
$b = 21;
if( $a == $b ) {
  echo "a and b is equal<br>";
}else {
  echo "a is not equal to b <br>";
}
if( $a === $b ) {
  echo "a and b is equal<br>";
}else {
  echo "a is not equal to b<br>";
}
if( $a != $b ) {
  echo "a and b is diferent<br>";
}else {
  echo "a is equal to b<br>";
}
if( $a < $b ) {
    echo "a is smaller than b <br>";
  }else {
    echo "b is smaller than a <br>";
  }
if( $a > $b ) {
    echo "a is bigger than b <br>";
  }else {
    echo "b is bigger than a <br>";
  }
if( $a <= $b ) {
    echo "a is smaller or equal than b <br>";
  }else {
    echo "b is smaller or equal than a <br>";
  }
if( $a >= $b ) {
    echo "a is bigger or equal than b <br>";
  }else {
    echo "b is bigger or equal than a <br>";
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
if ($x == 10 xor $y == 5) {
    echo "Hello world! xor <br>";
}
?>
