<?php


//==========   PHP BOOLEAN   ================


echo "<br>";
$x = true;
var_dump($x); // bool(true)
echo "<br>";
$y = false;
var_dump($y); // bool(false)
echo "<br>";


$a = true; // assign true to $a
$b = false; // assign false to $b

var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
echo '<br>';

//==========   PHP INTEGER   ================

echo "<br>";
$x = 5985;    
var_dump($x);   //  int(5985)
echo "<br>";

// 128 in different notations

$a = 128; 			// decimal number
var_dump($a);    //  int(128)
echo '<br>';
$b = -128; 			// a negative number
var_dump($b);    //  int(-128)
echo '<br>';
$c = 0x80; 			// hexadecimal number
var_dump($c);    //   int(128)
echo '<br>';
$d = 0200; 			// octal number
var_dump($d);    //  int(128)
echo '<br>';
$e = 0b10000000;	// binary number
var_dump($e);        //    int(128)
echo '<br>';


// ============  FLOAT  ============

echo '<br>';
$a = 2.56;        
var_dump($a);   //  float(2.56)
echo '<br>';
$a = 2.56e3; 
var_dump($a); // 2.56 multiplied by 3rd power of 10     float(2560)
echo '<br>';
$a = 2.56e-5; 
var_dump($a);  // 2.56 multiplied by -5th power of 10      float(2.56E-5)
echo '<br>';
echo '<br>';

echo "<br>";
$x = 10.365;    
var_dump($x);      //  float(10.365)
echo "<br>";

//==========   PHP STRING   ================

echo "<br>"; 
$x = "Hello world!";
$y = 'Hello world!';
echo $x;       //  Hello world!  
echo "<br>";    
echo $y;      //   Hello world!
echo "<br>";    

echo "<br>";
$x = "Hello world!";
var_dump($x);      //   string(12) "Hello world!"
echo "<br>";


//==========   PHP ARRAY   ================

// An array stores multiple values in one single variable.

// In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
// array(3) {
//   [0]=>
//   string(5) "Volvo"
//   [1]=>
//   string(3) "BMW"
//   [2]=>
//   string(6) "Toyota"
// }


$array = array("size" => "XL", "color" => "gold");

print_r(array_values($array));     //  Array ( [0] => XL [1] => gold )
echo '<br>';


$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);    //   array(4) { [0]=> string(3) "foo" [1]=> string(3) "bar" [2]=> string(5) "hello" [3]=> string(5) "world" }
echo "<br>";
echo "<br>";

$array = array("foo", "bar", "hello", "world");
var_dump($array);   //    array(4) { [0]=> string(3) "foo" [1]=> string(3) "bar" [2]=> string(5) "hello" [3]=> string(5) "world" }
echo "<br>";

echo "<br>";
$array = array(
    "a",
    "b",
6 => "c",
    "d",      // As you can see the last value "d" was assigned the key 7. This is because the largest integer key before that was 6.
);
var_dump($array);
echo "<br>";

// ==========  PHP OBJECT  ==============

// Classes and objects are the two main aspects of object-oriented programming.

// A class is a template for objects, and an object is an instance of a class.

// When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

// Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

// When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();             // My car is a black Volvo!
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();             //   My car is a red Toyota!



// =============  PHP "NULL" VALUE  =============

// Null is a special data type which can have only one value: NULL.

// A variable of data type NULL is a variable that has no value assigned to it.

// Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

// Variables can also be emptied by setting the value to NULL:


echo "<br>";
$x = "Hello world!";
$x = null;
echo "<br>";
var_dump($x);
echo "<br>";



?>