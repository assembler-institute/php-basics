<code>
    <div style="margin-bottom:15px">
        <b>Define a simple array composed of text strings
</b><br />
        <pre>
$fruits = array("orange", "banana", "apple");
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$fruits = array("orange", "banana", "apple");
print_r($fruits)
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Define a simple array consisting of whole numbers and decimal numbers
</b><br />
        <pre>
$numbers = array(2, 3.34, 1, 54);
        </pre>
        <u>Result:</u>
        <i>
        <?php
$numbers = array(2, 3.34, 1, 54);
print_r($numbers)
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Define a multidimensional array</b><br />
        <pre>
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
print_r($cars)
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows to obtain the length of an array</b><br />
        <pre>
$fruits = array("orange", "banana", "apple");
count($fruits)
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$fruits = array("orange", "banana", "apple");
echo count($fruits)
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows to obtain the combination of two arrays</b><br />
        <pre>
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
print_r($c = array_combine($a, $b));
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that once is given an array return the last element of it
</b><br />
        <pre>
$arr = array('Ram', 'Shita', 'Geeta');
end($arr)
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$arr = array('Ram', 'Shita', 'Geeta');
echo end($arr)
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that once is given an array add a new element to the array in question</b><br />
        <pre>
$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano")
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano");
print_r($pila)
        ?>        
        </i>
    </div>

</code>