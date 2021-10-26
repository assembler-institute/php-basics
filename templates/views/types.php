
    <!-- boolean -->
    <article class="article">
        <h3>1. Boolean</h3>
        <p>A Boolean represents two possible states: TRUE or FALSE.</p>
        <h5>example :</h5>
<pre>
$a = true;
echo $a;
<!-- $y = false; -->
</pre>
        <h5>result :</h5>
        <?php
            $a = true;
            echo $a;
            // $y = false;
            // echo $y;
        ?>
    </article>

    <!-- integer -->
    <article class="article">
        <h3>2. Integer</h3>
        <p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</p>
        <h5>example :</h5>
        <p>In the following example $x is an integer. The PHP var_dump() function returns the data type and value:</p>
<pre>
$b = 5985;
var_dump($b);
</pre>
        <h5>result :</h5>
        <?php
            $b = 5985;
            var_dump($b);
        ?>
    </article>

    <!-- float -->
    <article class="article">
        <h3>3. Float</h3>
        <h5>example :</h5>
        <p>In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>
<pre>
$c = 10.365;
var_dump($c);
</pre>
        <h5>result :</h5>
        <?php
            $c = 10.365;
            var_dump($c);
        ?>
    </article>

    <!-- string  -->
    <article class="article">
        <h3>4. String</h3>
        <h5>example :</h5>
<pre>
$d = "Hello world!";
</pre>
        <h5>result :</h5>
        <?php
            $d = "Hello world!";
            echo $d;
        ?>
    </article>

    <!-- array  -->
    <article class="article">
        <h3>5. Array</h3>
        <h5>example :</h5>
        <p>In the following example $cars is an array. The PHP var_dump() function returns the data type and value:</p>
<pre>
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
</pre>
        <h5>result :</h5>
        <?php
            $cars = array("Volvo","BMW","Toyota");
            var_dump($cars);
        ?>
    </article>

    <!-- object  -->
    <article class="article">
            <h3>6. Object</h3>
            <h5>example :</h5>
            <p>If you create a __construct() function, PHP will automatically call this function when you create an object from a class.</p>
<pre>
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
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
</pre>
        <h5>result :</h5>
        <?php
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
            echo $myCar -> message();
            echo "<br>";
            $myCar = new Car("red", "Toyota");
            echo $myCar -> message();
        ?>
    </article>

       <!-- NULL  -->
       <article class="article">
            <h3>7. Null</h3>
            <p>Tip: If a variable is created without a value, it is automatically assigned a value of NULL.</p>
            <h5>example :</h5>
            <p>Variables can also be emptied by setting the value to NULL:</p>
<pre>
$x = "Hello world!";
$x = null;
var_dump($x);
</pre>
            <h5>result :</h5>
            <?php
                $x = "Hello world!";
                $x = null;
                var_dump($x);
            ?>
        </article>
