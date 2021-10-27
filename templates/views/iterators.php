    <!-- For -->
    <article class="article">
        <h3>1. For</h3>
<pre>
for (expr1; expr2; expr3)
    statement
</pre>
        <h5>example :</h5>
<pre>
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
</pre>
        <h5>result :</h5>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo $i ;
            }
        ?>
    </article>

    <!-- Foreach -->
    <article class="article">
        <h3>2. Foreach</h3>
<pre>
foreach (iterable_expression as $value)
    statement
foreach (iterable_expression as $key => $value)
    statement
</pre>
        <h5>example :</h5>
<pre>
$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
}
</pre>
        <h5>result :</h5>
        <?php
            $a = array(1, 2, 3, 17);

            foreach ($a as $v) {
                echo "Current value of \$a: $v.\n";
            }
        ?>
    </article>

    <!-- while -->
    <article class="article">
        <h3>3. while</h3>
<pre>
while (expr)
    statement
</pre>
        <h5>example :</h5>
<pre>
$i = 1;
while ($i <= 10) {
    echo $i++;
</pre>
        <h5>result :</h5>
        <?php
            $i = 1;
            while ($i <= 10) {
                echo $i++;
            }
        ?>
    </article>

    <!-- do while -->
    <article class="article">
        <h3>4. Do while</h3>
        <p>Do-while loops are very similar to while loops, except the truth expression is checked at the end of each iteration instead of in the beginning.</p>
        <h5>example :</h5>
<pre>
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
</pre>
        <h5>result :</h5>
        <?php
            $x = 1;
            
            do {
            echo "The number is: $x <br>";
            $x++;
            } while ($x <= 5);
        ?>
    </article>
