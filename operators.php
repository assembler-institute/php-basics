<!-- Create an example of use for arithmetic operators: +, -, *, /, and% -->

<?php
$x = 10;  
$y = 6;
echo $x + $y;
?>  
</br>
<?php
var_dump($x + $y);
?>
</br>
<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  
</br>
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  
</br>
<?php
$x = 10;  
$y = 6;

echo $x / $y;
?>  
</br>
<?php
$x = 10;  
$y = 6;

echo $x % $y;
?> 

<!-- Create a usage example for comparison operators: ==,! =, <,>, <=,> = -->
</br>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); //amb === comparo valor i tipus
?>  

</br>
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  

</br>
<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>  

</br>
<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>  

</br>
<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?>  

</br>
<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>  


<!-- Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor -->
</br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>  
</br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  
</br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>  
</br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>
</br>
<?php
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}
?> 
</br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>  
