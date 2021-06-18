<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// type string
$a = "Hello world!";
var_dump($a);
echo '<br><br>';

// type integer
$b = 5985;
var_dump($b);
echo '<br><br>';

// type float
$c = 10.365;
var_dump($c);
echo '<br><br>';

// type boolean
$d = true;
var_dump($d);
echo '<br><br>';

// null
$e = null;
var_dump($e);

// type array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo '<br><br>';

// type object (class)
class Car
{
  public $color;
  public $model;
  public function __construct($color, $model)
  {
    $this->color = $color;
    $this->model = $model;
  }
  public function message()
  {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar->message();
echo '<br><br>';

require_once('../foot.php');
