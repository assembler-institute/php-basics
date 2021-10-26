
    <!-- arithmetic operators -->
    <article class="article">
        <h3>1. Arithmetic operators</h3>
        <p>Operands of modulo are converted to int before processing.</p>
        <h5>example :</h5>
<pre>
$x = 1;
$y = 2;

$sum = $x + $y;
echo $sum;
</pre>
        <h5>result :</h5>
        <?php
            $x = 1;
            $y = 2;
            
            $sum = $x + $y;
            echo $sum;
        ?>
    </article>

    <!-- Comparison Operators  -->
    <article class="article">
        <h3>2. Comparison Operators </h3>
        <p>If both operands are numeric strings, or one operand is a number and the other one is a numeric string, then the comparison is done numerically. </p>
        <h5>example :</h5>
<pre>
echo 1 <=> 1; // 0
echo 1.5 <=> 1.5; // 0
echo "a" <=> "b"; // -1
echo [1, 2, 3] <=> []; // 1
</pre>
        <h5>result :</h5>
        <?php
            echo 1 <=> 1;
            echo 1.5 <=> 1.5;
            echo "a" <=> "b"; 
            echo [1, 2, 3] <=> []; 
        ?>
    </article>

    <!-- logical operators  -->
    <article class="article">
        <h3>3. Logical operators </h3>
        <p>The reason for the two different variations of "and" and "or" operators is that they operate at different precedences. </p>
        <h5>example :</h5>
<pre>
$e = false || true;
</pre>
        <h5>result :</h5>
        <?php
            $e = false || true;
            echo $e;
        ?>
    </article>
