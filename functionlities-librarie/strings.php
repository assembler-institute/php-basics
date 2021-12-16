<?php

//  =======  Print a text string  ======

print 'Hello World';

// =========   Print a text string that interpret variables   =========

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<br>";
print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
echo "<br>";

echo "<br>";
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
echo "<br>";

// ======  Concatenate a previously declared variable in a text string   =====

$names = ['Adam', 'Andrew', 'Monty'];
 
foreach($names as $name) {
    $greeting = 'Hello ';
    $greeting .= $name;
    echo $greeting;
}


//   =======   Execute the function that allows you to replace text in a string (case sensitive)   =========

$arr = array("blue","red","green","yellow");
print_r(str_ireplace("RED","pink",$arr,$i)); // This function is case-insensitive
echo "Replacements: $i";


//  ====== Execute the function that allows you to replace text in a string (without taking into account upper / lower case)   ============

// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Provides: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

// Provides: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;

// =============    Execute the function that allows you to write a text N times   =======================

echo str_repeat("Wow",13);

//  =====    Execute the function that allows to obtain the length of a text string    ====

echo strlen("Hello");


//  =====    Executes the function that allows to obtain the position of the first occurrence of a text within a text string    ====

echo strpos("I love php, I love php too!","php");

//  =====    Execute the function that allows a text string to be capitalized   ====

echo ucwords("hello world");

//  =====    Execute   ====

echo strtolower("Hello WORLD 123"); // Output:hello world 123

//  =====    Execute the function that allows you to transform a text string to lowercase   ====

echo substr("Hello world",6);  // output: world

//  =====    Execute   ====
//  =====    Execute   ====
//  =====    Execute   ====
//  =====    Execute   ====
//  =====    Execute   ====
//  =====    Execute   ====
//  =====    Execute   ====
//  =====    Execute   ====


?>