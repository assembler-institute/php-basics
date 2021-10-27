<!-- Define a new variable and assign a value to each of the following types: -->

<?php
echo $a_bool = TRUE;   // a boolean echo
var_dump($a_bool);
echo "<br>";

 $a_str  = "foo";  // a string
var_dump($a_str);
echo "<br>";

 $a_str2 = 'foo';  // a string
var_dump($a_str2);
echo "<br>";

$an_int = 12;     // an integer
var_dump($an_int);
echo "<br>";

$a_float = 10.365;  // a float
var_dump($a_float);
echo "<br>";

$a_array = array("Volvo","BMW","Toyota");  // an array recorre x mostrar amb echo
var_dump($a_array);
echo "<br>";

$a_null = null;
var_dump($a_nul);  //NULL

?>

</br>
<?php                                       //object
class Car {
  public $color;
  public $model;
  public function __construct($color, $model, $power) {
    $this->color = $color;
    $this->model = $model;
    $this->power = $power;
  } 
  public function message() {
    return "My car is a " . $this->color . " " .$this->model. " and have and engine of  "  .$this->power. " hp!";
  }
}
echo "<br>";
$myCar = new Car("black", "Volvo", "500");
echo $myCar -> message();
echo "<br>";
var_dump($myCar);
echo "<br>";
$myCar = new Car("red", "Toyota", "1024");
echo $myCar -> message();
echo "<br>";
var_dump($myCar); 
?>                                                  
