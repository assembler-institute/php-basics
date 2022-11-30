<!-- Define a variable whose value is the result of the function that returns an absolute value. -->

<?php
echo abs(-4.2); // 4.2 (double/float)
echo "</br>";
echo abs(5);    // 5 (integer)
echo "</br>";
echo abs(-5);   // 5 (integer)
?>

<!-- Define a variable whose value is the result of the function that returns a rounded value to the next highest integer. -->
</br>
<?php
echo(round(0.60));  // returns 1
echo "</br>";
echo(round(0.49));  // returns 0
?>

<!-- Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that 
are received by parameter. -->
</br>
<?php
echo max(2, 3, 1, 6, 7); 
?>

<!-- Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that 
are received by parameter. -->
</br>
<?php
echo min(2,4,6,8,10) . "<br>";
echo(min(22,14,68,18,15) . "<br>");
echo(min(array(4,6,8,10)) . "<br>");
echo(min(array(44,16,81,12)));
?>


<!-- Define a variable whose value is the result of the function that returns a random number -->
</br>
<?php
echo rand() ; //echo i print es poden fer servir amb o sense parentesi
?>


