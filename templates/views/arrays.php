
    <!-- Simple array composed of text strings -->
    <article class="article">
        <h3>1. Define a simple array composed of text strings</h3>
        <h5>example :</h5>
<pre>
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
</pre>
        <h5>result :</h5>
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?>
    </article>

    <!-- Simple array consisting of whole numbers and decimal numbers -->
    <article class="article">
        <h3>2. Define a simple array consisting of whole numbers and decimal numbers</h3>
        <h5>example :</h5>
<pre>
$array = array(1, 3, 4.5, 6);
print_r($array);
</pre>
        <h5>result :</h5>
    <?php
        $array = array(1, 3, 4.5, 6);
        print_r($array);
    ?>
    </article>

    <!-- multidimensional array -->
    <article class="article">
        <h3>3. Define a multidimensional array</h3>
        <p>A multidimensional array is an array containing one or more arrays.</p>
        <h5>example :</h5>
<pre>
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2];
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2];
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2];
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2];
echo $cars;
</pre>
        <h5>result :</h5>
        <?php
            $cars = array (
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
            );
            echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
            echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
            echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
            echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        ?>
    </article>

    <!-- obtain the length of an array  -->
    <article class="article">
        <h3>4. Obtain the length of an array </h3>
        <p>We can use the PHP count() or sizeof() function to get the particular number of elements or values in an array.</p>
        <h5>example :</h5>
<pre>
$days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"); 
echo count($days);
echo sizeof($days);
</pre>
        <h5>result :</h5>
        <?php
            $days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
            echo count($days);
            echo "<br>";
            echo sizeof($days);
        ?>
    </article>

    <!-- obtain the combination of two arrays  -->
    <article class="article">
        <h3>5. Obtain the combination of two arrays</h3>
        <p> Creates an array by using one array for keys and another for its values</p>
<pre>
array_combine(array $keys, array $values): array
</pre>
        <h5>example :</h5>
<pre>
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
</pre>
        <h5>result :</h5>
        <?php
            $a = array('green', 'red', 'yellow');
            $b = array('avocado', 'apple', 'banana');
            $c = array_combine($a, $b);
            print_r($c);
        ?>
    </article>

    <!-- Return the last element of an array -->
    <article class="article">
        <h3>6. Return the last element of an array</h3>
        <p>The end() function changes the internal pointer of an array to point to the last element and returns the value of the last element.</p>
<pre>
end($array)
</pre>
        <h5>example :</h5>
<pre>
$arr = array('Ram', 'Shita', 'Geeta');
echo end($arr); 
</pre>
        <h5>result :</h5>
        <?php
            $arr = array('Ram', 'Shita', 'Geeta');
            echo end($arr); 
        ?>
    </article>

    <!-- add a new element to the array -->
    <article class="article">
        <h3>7. Add a new element to the array</h3>
        <p>Push one or more elements onto the end of array. array_push() treats array as a stack, and pushes the passed variables onto the end of array. The length of array increases by the number of variables pushed.</p>
<pre>
array_push(array &$array, mixed ...$values): int
</pre>       
        <h5>example :</h5>
<pre>
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
</pre>
        <h5>result :</h5>
        <?php
            $stack = array("orange", "banana");
            array_push($stack, "apple", "raspberry");
            print_r($stack);
        ?>
    </article>
