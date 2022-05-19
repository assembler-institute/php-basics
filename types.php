<?php


// Types of variables and data in PHP

// boolean
$myBool = true;
echo '<code>$myBool = true;</code><br>';
var_dump($myBool);

echo '<br><br>';

//integer
$myInt = 430;
echo '<code>$myInt = 430;</code><br>';
var_dump($myInt);

echo '<br><br>';

//float
$myFloat = 3.141592;
echo '<code>$myFloat = 3.141592;</code><br>';
var_dump($myFloat);


echo '<br><br>';

// string
$myString = 'Wow. A string.';
echo '<code>$myString = ';
echo "'Wow. A string.';</code><br>";
var_dump($myString);

echo '<br><br>';

// array
$myArray = array ('tea', 'coffee', 'juice', 'water');
echo '<code>$myArray = ';
echo "('tea', 'coffee', 'juice', 'water');</code><br>";
print_r($myArray);
echo '<br>';
var_dump($myArray);

echo '<br><br>';

// object
class home  // declare taxi object / class
{
    public $type = 'apartment';
    public $bedrooms = '3';
    public $renovated = false;
    public $naturalLight = true;
    public $balconies = 2;
    function describe_home()
    {
            echo "A $bedrooms-bedroom $type, with $balconies balconies.";
    }
}
print_r(new home);

echo '<br><br>';


// NULL
$myVar = NULL;
var_dump($myVar);  // can't echo
