
    <!-- absolute value -->
    <article class="article">
        <h3>1. Absolute value</h3>
        <p>Returns the absolute value of num.</p>
<pre>
abs(int|float $num): int|float
</pre>
        <h5>example :</h5>
<pre>
echo abs(-4.2); 
echo abs(5);   
echo abs(-5);
</pre>
        <h5>result :</h5>
        <?php
            echo abs(-4.2);
            echo "<br>";
            echo abs(5);
            echo "<br>";
            echo abs(-5);
        ?>
    </article>

    <!-- rounded value to the next highest integer -->
    <article class="article">
        <h3>2. Rounded value to the next highest integer</h3>
        <p>Returns the rounded value of num to specified precision (number of digits after the decimal point). precision can also be negative or zero (default).</p>
<pre>
round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
</pre>
        <h5>example :</h5>
        <p>In the following example $x is an integer. The PHP var_dump() function returns the data type and value:</p>
<pre>
$num = round(8.5, 0, PHP_ROUND_HALF_UP);
echo $num;
</pre>
        <h5>result :</h5>
        <?php
            $num = round(8.5, 0, PHP_ROUND_HALF_UP);
            echo $num;
        ?>
    </article>

    <!-- return the highest value of a series of values  -->
    <article class="article">
        <h3>3. Return the highest value of a series of values </h3>
<pre>
max(mixed $value, mixed ...$values): mixed
</pre>
        <h5>example :</h5>
<pre>
echo max(2, 3, 1, 6, 7);
echo max(array(2, 4, 5));
</pre>
        <h5>result :</h5>
        <?php
            echo max(2, 3, 1, 6, 7);
            echo "<br>";
            echo max(array(2, 4, 5));
        ?>
    </article>

    <!-- return the lowest value  -->
    <article class="article">
        <h3>4. Return the lowest value</h3>
<pre> 
min(mixed $value, mixed ...$values): mixed
</pre>
        <h5>example :</h5>
<pre>
echo min(2, 3, 1, 6, 7);  
echo min(array(2, 4, 5));
</pre>
        <h5>result :</h5>
        <?php
            echo min(2, 3, 1, 6, 7);  
            echo "<br>";
            echo min(array(2, 4, 5));
        ?>
    </article>

    <!-- return a random number  -->
    <article class="article">
        <h3>5. Return a random number</h3>
        <p>To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.</p>
        <h5>example :</h5>
<pre>
$numRand = rand();
echo $numRand;
</pre>
        <h5>result :</h5>
        <?php
            $numRand = rand(10, 50);
            echo $numRand;
        ?>
    </article>
