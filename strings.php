<!-- Print a text string -->

<?php
print "Hello world!"; 
?>

<!-- Print a text string that interpret variables -->

</br>
<?php

$a= "Hola patata";
print $a; 
?>

<!-- Concatenate a previously declared variable in a text string -->
</br>
<?php

$a= "Hola patata";
print $a . " com va tot"; 
?>

<!-- Execute the function that allows you to replace text in a string (case sensitive) -->
</br>
<?php
echo str_replace("world","Peter","Hello world!");
?>

<!-- Execute the function that allows you to replace text in a string (without taking into account upper / lower case) -->

<p>Search the string "Hello good world!", find the value "WORLD" and replace it with "Peter":</p>

<?php
echo str_ireplace("WORLD","Peter","Hello good world!");
?>

<p>Search an array for the value "RED", and then replace it with "pink".</p>

</br>
<?php
$arr = array("blue","red","green","yellow");
print_r(str_ireplace("RED","pink",$arr,$i)); // Case-insensitive
echo "<br>" . "Replacements: $i";
?>

<!-- Execute the function that allows you to write a text N times -->
</br>
<?php
echo "<br>"; 
echo str_repeat("Wow </br>",12);
?>

<!-- Execute the function that allows to obtain the length of a text string -->
</br>
<?php
$str = 'php';
echo strlen($str); // 3
echo "<br>"; 
$str = 's p a c e';
echo strlen($str); // 9
?>
<!-- Executes the function that allows to obtain the position of the first occurrence of a text within a text string -->
</br>
<?php
$cheese = "cheese";

echo strpos($cheese, 'e'); //return false if not found

?>

<!-- Execute the function that allows a text string to be capitalized -->

</br>
<?php
$lowercase = "this was lower case";
$uppercase = strtoupper($lowercase);

echo $uppercase;
?>

<!-- Execute the function that allows you to transform a text string to lowercase -->


</br>
<?php
$uppercase = "THIS WAS UPPER CASE";
$lowercase = strtolower($uppercase);

echo $lowercase;
?>

<!-- Execute the function that allows to obtain a text substring from the position -->
</br>
<?php
echo substr("Hello world",6);
?>
