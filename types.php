<?php
// Type asigning
echo "<p>Assigning types<p>";
$boolean = true;
$integer = 12;
$float = 25.5;
$string = "Hello World";
$array = array("This", "is", "an", "array");

class myObject{
    function say_hi()
    {
        echo "Hello World.";
    }
}

$object = new myObject;
$nullVariable = null;

echo gettype($boolean), "<br>";
echo gettype($integer), "<br>";
echo gettype($float), "<br>";
echo gettype($string), "<br>";
echo gettype($array), "<br>";
echo gettype($object), "<br>";
echo gettype($nullVariable), "<br>";
?>