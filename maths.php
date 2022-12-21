<?php
//Define a variable whose value is the result of the function that returns an absolute value

var_dump(abs(-4.2));
echo"<br><br>";
var_dump(abs(5));
echo"<br><br>";
var_dump(abs(-5));
echo"<br><br>";

//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.

echo ceil(4.3);    // 5
echo"<br><br>";
echo ceil(9.999);  // 10
echo"<br><br>";
echo ceil(-3.14); 
echo"<br><br>";

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
echo max(2, 3, 1, 6, 7);
echo"<br><br>";
echo max(array(2, 4, 5));
echo"<br><br>";

//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
echo min(2, 3, 1, 6, 7);
echo"<br><br>"; 
echo min(array(2, 4, 5)); 
echo"<br><br>";

//Define a variable whose value is the result of the function that returns a random number
echo rand() . "\n";
echo rand() . "\n";
echo rand(5, 15);
echo"<br><br>";

?>

