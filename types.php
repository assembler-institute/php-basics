<?php

/* boolean */

$a = true;
$b = false;

echo "<br><br>";

/* integer */

$c = 5985;
var_dump($c);

echo "<br><br>";

/* float */

$d = 10.365;
var_dump($d);

echo "<br><br>";

/* String */

$f = "Hello world!";
$g = 'Hello world!';

echo $f;
echo "<br>";
echo $g;

echo "<br><br>";

/* Array */

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br><br>";

/* object */

class Pencil {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My pencil is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myPencil = new Pencil("black", "Bic");
  echo $myPencil -> message();
  echo "<br>";
  $myPencil = new Pencil("red", "Pilot");
  echo $myPencil -> message();

  echo "<br><br>";

/* null */

$h = "Hello world!";
$i = null;
var_dump($i);

?>